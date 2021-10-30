<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;
use App\Profesor;
use App\Alumno;
use App\Cursos;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Notas::all();
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $cursos = Cursos::all();
        return view("nota.index", compact("notas", "profesores", "alumnos", 'cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $cursos = Cursos::all();
        return view("nota.create", compact("profesores", "alumnos", 'cursos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Notas::create($datos);
        
       


       return redirect()->route('nota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notas = Notas::find($id);
        return view("nota.show", compact('notas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $cursos = Cursos::all();
        $nota = Notas::find($id);
        return view("nota.edit", compact("profesores", "alumnos", 'cursos', 'nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        Notas::find($id)->update($datos);
        return redirect()->route('nota.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notas::find($id)->delete();
        return redirect()->route('nota.index');
    }
}
