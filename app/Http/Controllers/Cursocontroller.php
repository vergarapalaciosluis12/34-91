<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class Cursocontroller extends Controller
{
    public function create(){
       
        return view('curso.create');

    }

    public function store(Request $request){
       
        $curso= new Curso();

        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
        return $curso;
    }
    public function listar(){
 
        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('curso.listar', compact('cursos'));

    }
    public function show(Curso $curso){//$id
        // $curso=Curso::find($id);
        return view('curso.show',compact('curso'));
    }

    public function destroy(Curso $curso){
       
        $curso->delete();
       
        return redirect()->route('curso.listar');
    }
    public function edit(Curso $curso){
        return view('curso.edit',compact('curso'));
    }
    public function update(Request $request,Curso $curso){
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
        return redirect()->route('curso.listar');
    }
}
