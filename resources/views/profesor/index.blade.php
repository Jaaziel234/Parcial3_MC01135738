@extends('layouts.app')

@section('content')
    <section class="content-header">
         <center>
         @can('create_profesor')
            <h1>VISTA DOCENTES</h1>
            <a class='btn btn-primary' href="{{url("/profesor/nuevos")}}">Nuevo</a> 
            <table id="example" class="display">
            @endcan

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dui</th>
                        <th>Email</th>
                        <th>Telefonos</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profesor as $profesores)
                        <tr>
                            <td>{{$profesores->id}}</td>
                            <td><a href="{{ url("/profesor/{$profesores->id}") }}">{{$profesores->name}}</a></td>
                            <td>{{$profesores->dui}}</td>
                            <td>{{$profesores->email}}</td>
                            <td>{{$profesores->telefono}}</td>
                            <td>
                                <form action="{{url("profesor/{$profesores->id}/editar") }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                </form>
                                <form action="{{url("profesor/{$profesores->id}/eliminar")}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </center> 
    </section>
@endsection

 