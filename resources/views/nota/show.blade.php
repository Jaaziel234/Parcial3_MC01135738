@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <div class="container">
            <h1 class="text-primary p-5">Informacion de Notas: {{$nota->id}}</h1>
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
                        <th>Alumno</th>
                        <th>Profesor</th>
                        <th>Curso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <td><a href="{{ url("nota.show", $nota->id ) }}">{{$nota->id}}</a></td>
                   <td>{{$nota->nota1}}</td>
                   <td>{{$nota->nota2}}</td>
                   <td>{{$nota->nota3}}</td>
                   <td>{{$nota->nota4}}</td>
                   <td> 
                    <form action="{{url("nota/{$nota->id}/editar") }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-success"><i class="fa fa-address-book"></i> Editar Informacion</button>
                    </form>
                    <form action="{{url("nota/{$nota->id}/eliminar")}}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar Docente</button>
                    </form>
                </td>
                </tbody>
            </table>
            <button type="submit"><a href="{{ url("/nota/") }}"><i class="fa fa-eye"></i >Volver a la vista Principal</a></button>
        </div>
        </center>
    </section>
@endsection

 