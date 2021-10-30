@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left col text-center">ROLES</h1>
    @can('create_roles')
    <h1 class="pull-right col text-center mt-4">
        <a class="btn btn-warning" style="margin-top: -10px;margin-bottom: 5px"
            href="{{ route('roles.create') }}">NUEVO</a>
    </h1>
    @endcan

</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            @include('roles.table')
        </div>
    </div>
    <div class="text-center">

    </div>
</div>
@endsection