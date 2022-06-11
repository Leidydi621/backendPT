<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;


class CursosController extends Controller
{
    public function getCursos(){
        return response()->json(Cursos::all(), 200);
    }

    public function addCursos(Request $request){

        $curso =  Cursos::create($request->all());
        return response()->json($curso, 201);

    }

    public function updateCurso(Request $request, $id){

        $curso = Cursos::find($id);
        if (is_null($curso)) {
            return response()->json(['message' => 'Curso not found'], 404);
        }

        $curso->update($request->all());
        return response()->json($curso, 200);

    }

    public function deleteCurso(Request $request, $id){

        $curso = Cursos::find($id);
        if (is_null($curso)) {
            return response()->json(['message' => 'Curso not found'], 404);
        }

        $curso->delete();
        return response()->json(null, 204);

    }

    public function getCursoById(Request $request, $id){

        $curso = Cursos::find($id);
        if (is_null($curso)) {
            return response()->json(['message' => 'Curso not found'], 404);
        }

        return response()->json($curso::find($id), 200);

    }
}
