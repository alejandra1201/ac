<?php

namespace App\Http\Controllers;
use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
    $cursos=Curso::All();
    return view('cursos.listarCurso',compact('cursos'));

}
    public function create(){
        return view('cursos.create');
    }
    public function store(Request $request){
   
        $curso= new Curso();
        $curso->name = $request->nombre_curso;
        $curso->descripcion = $request->descripcion_curso;

        $curso->save();

        return redirect()->route('cursos.index');
   
    }

    public function destroy(Curso $curso)
    {
       $curso->delete();
       return redirect()->route('cursos.index');
    }
    
    public function show(Curso $curso)
    { 
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso )
    {

        return view('cursos.edit',compact('curso'));
    }


    public function update(Request $request,Curso $curso){
    $curso->name = $request->name;
    $curso->descripcion= $request->descripcion;
    $curso->save();
    return redirect()->route('cursos.index',$curso);
}}