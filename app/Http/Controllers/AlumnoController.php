<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function index()
    {
       /*  $alumnos = DB::table('alumnos')->get();
        dd($alumnos); */

        $alumnos = Alumno::all();

        return view('alumnos.index',[
            'alumnos' => $alumnos
        ]);
    }


    public function show($id)
    {
        $alumnos = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumnos'));
    }

    public function create()
    {
        $alumnos = Alumno::all();
        return view('alumnos.create', compact('alumnos'));
    }

    public function store()
    {
        $data = request()->all();
        Alumno::create([
            'name' => $data['name'],
            'apellido' => 'zelaya',
            'fecha_nacimiento' => '16/01/2001',
            'direccion' => 'Planes de Renderos',
            'genero' => 'M',
            'telefono' => '72626363',
            'email' => $data['email'],
            'cursos' => 'programacion 3',
            'password' => bcrypt($data['password'])
        ]);

        return redirect('/alumnos/');
    }


    public function editar(Alumno $alumno)
    {
        return view('alumnos.editar', ['alumnos' => $alumno]);
    }

    public function actualizar(Alumno $alumnos)
    {
        $data = request()->all();
        $data['password'] = bcrypt($data['password']);
        $alumnos->update($data);
        return redirect("alumnos/{$alumnos->id}");
    }

    public function delete($id)
    {
        Alumno::findOrFail($id)->delete();
        return redirect('/alumnos/');
    }
}
