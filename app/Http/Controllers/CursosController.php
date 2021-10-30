<?php

namespace App\Http\Controllers;
use App\Profesor;
use App\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $curso = Cursos::all();
        $profesor = Profesor::all(); 

        return view('cursos.index',[
            'curso' => $curso,
            'profesores'=> $profesor
        ]);
    }

    public function show($id)
    {
        $curso = Cursos::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function create()
    {
        $curso = Cursos::all();
        $profesores = Profesor::all();
        return view('cursos.create', compact('curso', 'profesores'));
    }

    public function store(Request $request)
    {
       $datos = $request->all();
       Cursos::create($datos);

       $curso = Cursos::all();
       $profesor = Profesor::all();
       
       return view('cursos.index',[
           'curso' => $curso,
           'profesores'=> $profesor
       ]);
    }

    public function editar($curso)
    {
        $cursos = Cursos::find($curso); 
        $profesor = Profesor::all() ;      
        return view('cursos.editar', 
        ['cursos' => $cursos,
        'profesores' => $profesor
        ]);
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        $datos = $request->all();
        Cursos::find($id)->update($datos);


        $curso = Cursos::all();
        $profesor = Profesor::all(); 

        return view('cursos.index',[
            'curso' => $curso,
            'profesores'=> $profesor
        ]);

    }
    public function delete($id)
    {
        Cursos::find($id)->delete();

        $curso = Cursos::all();
        $profesor = Profesor::all(); 

        return view('cursos.index',[
            'curso' => $curso,
            'profesores'=> $profesor
        ]);
    }
}
