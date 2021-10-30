@extends('layouts.app')

@section('content')
    <section class="content-header">
        <center>
            <div class="container">
            <h1 class="text-primary p-5">Informacion del Docente: {{$profesor->id}}</h1>
            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>email</th>
                        <th>Dui</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   <td>{{$profesor->id}}</td>
                   <td>{{$profesor->name}}</td>
                   <td>{{$profesor->email}}</td>
                   <td>{{$profesor->dui}}</td>
                   <td>{{$profesor->telefono}}</td>
                   <td> 
                    <form action="{{url("profesor/{$profesor->id}/editar") }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-success"><i class="fa fa-address-book"></i> Editar Informacion</button>
                    </form>
                    <form action="{{url("profesor/{$profesor->id}/eliminar")}}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar Docente</button>
                    </form>
                </td>
                </tbody>
            </table>
            <button type="submit"><a href="{{ url("/profesor/") }}"><i class="fa fa-eye"></i >Volver a la vista Principal</a></button>
        </div>
        </center>
    </section>
@endsection

 