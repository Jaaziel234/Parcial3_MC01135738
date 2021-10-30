@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
        @can('create_alumnos')
            <h1>VISTA DE ALUMNOS</h1>
            
            <a class='btn btn-primary' href="{{url("/alumnos/nuevo")}}">Nuevo</a>
            @endcan
 
            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Curso</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{$alumno->id}}</td>
                            <td><a href="{{ url("/alumnos/{$alumno->id}") }}">{{$alumno->name}}</a></td>
                            <td>{{$alumno->cursos}}</td>
                            <td>{{$alumno->email}}</td>
                            <td>{{$alumno->fecha_nacimiento}}</td>
                            <td>
                                <form action="{{url("alumnos/{$alumno->id}/editar") }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                </form>
                                <form action="{{url("alumnos/{$alumno->id}/eliminar")}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                                <a href="{{ url("nota") }}">Ver Notas</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </section>
@endsection

 