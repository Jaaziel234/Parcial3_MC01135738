@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <h1 class="text-primary p-5">Informacion del usuario: {{$alumnos->id}}</h1>
            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>email</th>
                        <th>Curso</th>
                        <th>Nota</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   <td>{{$alumnos->id}}</td>
                   <td>{{$alumnos->name}}</td>
                   <td>{{$alumnos->email}}</td>
                   <td>{{$alumnos->cursos}}</td>
                   <td>{{$alumnos->notas}}</td>
                   <td> <form action="{{url("alumnos/{$alumnos->id}/editar")}}" method="GET">
                    @method('get')
                    @csrf
                    <button class="btn btn-success mb-3" type="submit">Editar Usuario</button> 
                    </form>
    
                    <form action="{{url("alumnos/{$alumnos->id}/eliminar")}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mb-3" type="submit">Eliminar Usuario</button>
                        </form>
                    </td>
                </tbody>
            </table>
            <button type="submit"><a href="{{ url("/alumnos/") }}"><i class="fa fa-eye"></i >Volver a la vista Principal</a></button>
        </center>
    </section>
@endsection

 