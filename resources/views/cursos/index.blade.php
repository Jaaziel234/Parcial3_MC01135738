@extends('layouts.app')

@section('content')
    <section class="content-header">
         <center>
         @can('create_cursos')
            <h1>VISTA DE CURSOS</h1>
           <a class='btn btn-primary' href="{{url("/cursos/nuevo")}}">CREAR</a>
            <table id="example" class="display">
            @endcan

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cursos</th>
                        <th>Año</th>
                        <th>Ciclo</th>
                        <th>Profesor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($curso as $cursos)
                        <tr>
                            <td>{{$cursos->id}}</td>
                            <td><a href="{{ url("/cursos/{$cursos->id}") }}">{{$cursos->name}}</a></td>
                            <td>{{$cursos->año}}</td>
                            <td>{{$cursos->ciclo}}</td>
                            <td>
                            @foreach($profesores as $profesor)
                                @if($profesor->id == $cursos->idprofesor)
                                {{$profesor->name}} {{$profesor->apellido}}
                                @endif
                            @endforeach

                            </td>
                            <td>
                            <form action="{{url("cursos/{$cursos->id}/editar") }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                </form>
                    
                                <form action="{{url("cursos/{$cursos->id}/eliminar")}}" method="POST">
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

 