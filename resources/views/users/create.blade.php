@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class='text-center'>
        USUARIO
    </h1>
</section>
<div class="content text-center">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'users.store']) !!}

                @include('users.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection