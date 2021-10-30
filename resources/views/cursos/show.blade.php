@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <div class="container">
            <h1 class="text-primary p-5">Informacion del Docente: {{$curso->id}}</h1>
            <table id="myTable" class="display">
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
                   <td>{{$curso->id}}</td>
                   <td>{{$curso->name}}</td>
                   <td>{{$curso->año}}</td>
                   <td>{{$curso->ciclo}}</td>
                   <td>{{$curso->profesor}}</td>
                   <td> 
                    {{-- <form action="{{url("profesor/{$profesor->id}/editar") }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-success"><i class="fa fa-address-book"></i> Editar Informacion</button>
                    </form>
                    <form action="{{url("profesor/{$profesor->id}/eliminar")}}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar Docente</button>
                    </form> --}}
                </td>
                </tbody>
            </table>
            <button type="submit"><a href="{{ url("/cursos/") }}"><i class="fa fa-eye"></i >Volver a la vista Principal</a></button>
        </div>
        </center>
    </section>
@endsection

 