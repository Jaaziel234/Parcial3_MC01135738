<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfesorController extends Controller
{
    public function index()
    {
         /* $profesor = DB::table('alumnos')->get();
        dd($profesor); */

         $profesor = Profesor::all();

        return view('profesor.index',[
            'profesor' => $profesor
        ]); 
    }

    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesor.show', compact('profesor'));
    }

    public function create()
    {
        $profesor = Profesor::all();
        return view('profesor.create', compact('profesor'));
    }

    public function store()
    {
        $data = request()->all();
        Profesor::create([
            'name' => $data['name'],
            'apellido' => 'zelaya',
            'dui' => Str::random(10),
            'telefono' => Str::random(10),
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect('/profesor/');
    }

    public function editar(Profesor $profesor)
    {
        return view('profesor.editar', ['profesor' => $profesor]);
    }

    public function update(Profesor $profesor)
    {
        $data = request()->all();
        $data['password'] = bcrypt($data['password']);
        $profesor->update($data);
        return redirect("profesor/{$profesor->id}");
    }

    public function delete($id)
    {
        Profesor::findOrFail($id)->delete();
        return redirect('/profesor/');
    }

}
