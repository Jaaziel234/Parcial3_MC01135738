@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <h1 class="text-primary p-5">Editar Detalles Del Docente</h1>
            <form method="POST" action="{{ url("profesor/{$profesor->id}") }}">
                @method('put')
                @csrf
                
            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre: </label>
                <div class="form-group col-sm-6">
                <input type="text" name="name" class="form-control-plaintext" id="name" placeholder="Ejemplo Esau" value="{{ old('name') }}">
            
                @if($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
                @endif
            </div>
            </div>
            
            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="email" class="form-control-plaintext" id="email" placeholder="Ejemplo@gmail.com" value="{{ old('email') }}">
                
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            
            </div>
            </div>
            
            <div class="row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                <div class="form-group col-sm-6">
                <input type="password" name="password" class="form-control-plaintext" id="inputPassword" placeholder="mayor a 5" value="{{ old('password') }}">
            
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            
            </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i>Editar Docente</button>
            </div>
            </div>
            </form>
        </center>        
    </section>
@endsection