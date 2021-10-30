@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <h1 class="text-primary p-5">Editar Nota</h1>
            <form method="POST" action="{{ route('nota.update', $nota->id) }}">
                

                @csrf
                @method('put')

                
            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nota1:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="nota1" class="form-control-plaintext" id="nota1" placeholder="inserte nota" value="{{$nota->nota1}}">
            
                @if($errors->has('nota1'))
                    <p>{{ $errors->first('noat1') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nota2:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="nota2" class="form-control-plaintext" id="nota2" placeholder="inserte nota" value="{{$nota->nota2}}">
            
                @if($errors->has('noat2'))
                    <p>{{ $errors->first('noat2') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nota3:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="nota3" class="form-control-plaintext" id="nota3" placeholder="inserte nota" value="{{$nota->nota3}}">
            
                @if($errors->has('nota3'))
                    <p>{{ $errors->first('nota3') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nota4:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="nota4" class="form-control-plaintext" id="nota4" placeholder="inserte mota" value="{{$nota->nota4}}">
            
                @if($errors->has('nota4'))
                    <p>{{ $errors->first('nota4') }}</p>
                @endif
            </div>
            </div>
            
           
            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Parcial:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="parcial" class="form-control-plaintext" id="name" placeholder="Inserte nota" value="{{$nota->parcial}}">
            
                @if($errors->has('name'))
                    <p>{{ $errors->first('parcial') }}</p>
                @endif
            </div>
            </div>
            
            <div class="row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Promedio:</label>
                <div class="form-group col-sm-6">
                <input type="text" name="promedio" class="form-control-plaintext" id="name" placeholder="Inserte promedio" value="{{$nota->promedio}}">
            
                @if($errors->has('promedio'))
                    <p>{{ $errors->first('promedio') }}</p>
                @endif
            </div>
            </div>

            <div class="row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alumno</label>
                <div class="form-group col-sm-2">
                <select name="idalumno" id="">
                @foreach($alumnos as $alumno)
                    <option value="{{$alumno->id}}">{{$alumno->name}} </option>
                @endforeach
                    
                </select>            
                @if($errors->has('idprofesor'))
                    <p>{{ $errors->first('idprofesor') }}</p>
                @endif
            
            </div>
            </div>
            
           

            <div class="row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Cursos</label>
                <div class="form-group col-sm-2">
                <select name="idcursos" id="">
                @foreach($cursos as $curso)
                    <option value="{{$curso->id}}">{{$curso->name}} </option>
                @endforeach
                    
                </select>            
                @if($errors->has('idcursos'))
                    <p>{{ $errors->first('idcursos') }}</p>
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

            

            <div class="row">
                <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i>Generar Nota</button>
        </div>
        </div>
            
            </form>
        </center>
    </section>
@endsection

 