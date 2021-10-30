@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <h1 class="text-primary p-5">CURSO</h1>
            <form method="POST" action="{{ url('cursos/crear') }}">
                @csrf
                
                <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre: </label>
                <div class="form-group col-sm-6">
                <input type="text" name="name" class="form-control-plaintext" id="name" placeholder="progra" value="{{ old('name') }}">
            
                @if($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
                @endif
            </div>
            </div>
            
            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Año:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="año" class="form-control-plaintext" id="year" placeholder="2021" value="{{ old('email') }}">
                
                @if($errors->has('año'))
                    <p>{{ $errors->first('año') }}</p>
                @endif
            
            </div>
            </div>
            
            <div class="row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Ciclo:</label>
                <div class="form-group col-sm-6">
                <input type="number" name="ciclo" class="form-control-plaintext" id="number" placeholder="1" value="{{ old('password') }}">
            
                @if($errors->has('ciclo'))
                    <p>{{ $errors->first('ciclo') }}</p>
                @endif
            
            </div>
            </div>

            <div class="row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Profesor</label>
                <div class="form-group col-sm-2">
                <select name="idprofesor" id="">
                @foreach($profesores as $profesor)
                    <option value="{{$profesor->id}}">{{$profesor->name}} </option>
                @endforeach
                    
                </select>            
                @if($errors->has('idprofesor'))
                    <p>{{ $errors->first('idprofesor') }}</p>
                @endif
            
            </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col text-center">
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-plus"></i> Crear</button>
                    
                    </div>
                </div>
                </div>
            </form>
        </center>
    </section>
@endsection