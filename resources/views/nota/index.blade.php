@extends('layouts.app')

@section('content')
    <section class="content-header">
         <center>
         @can('create_nota')
            <h1>NOTAS</h1>
            @endcan
            <a class='btn btn-primary' href="{{url('nota/create')}}"><i class="fa fa-book"></i> Crear</a> 
            <table id="example" class="display">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nota1</th>
                        <th>Nota2</th>
                        <th>Nota3</th>
                        <th>Nota4</th>
                        <th>parcial</th>
                        <th>promedio</th>
                        <th>Docente</th>
                        <th>Alumno</th>
                        <th>Curso</th>
                        
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notas as $nota)
                        <tr>
                            <td><a href="{{ url("nota.show", $nota->id ) }}">{{$nota->id}}</a></td>
                            <td>{{$nota->nota1}}</td>
                            <td>{{$nota->nota2}}</td>
                            <td>{{$nota->nota3}}</td>
                            <td>{{$nota->nota4}}</td>
                            <td>{{$nota->parcial}}</td>
                            <td>{{$nota->promedio}}</td>
                            
                            
                            <td>
                              
                                @foreach($profesores as $profesor)

                              

                                @if($profesor->id == $nota->idprofesor)
                                {{$profesor->name}} {{$profesor->apellido}}
                                @endif

                                    
                                @endforeach


                            </td>
                            
                            <td>
                                @foreach($alumnos as $alumno)

                              

                                @if($alumno->id == $nota->idalumno)
                                {{$alumno->name}} {{$alumno->apellido}}
                                @endif

                                    
                                @endforeach


                            </td>
                            <td>

                                @foreach($cursos as $curso)

                              

                                @if($curso->id == $nota->idcursos)
                                {{$curso->name}} 
                                @endif

                                    
                                @endforeach

                            </td>
                            <td>
                                <a href="{{ route('nota.edit', $nota->id)}}"  class="btn btn-success"><i class="fa fa-pencil"></i></a>
                               
                                <form action="{{ route('nota.destroy', $nota->id)}}" method="POST">
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

 