<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get all cursos
Route::get('/cursos', [CursosController::class, 'getCursos']);

//read one curso
Route::get('/curso/{id}', [CursosController::class, 'getCursoById']);

//add Curso
Route::post('/addCurso', [CursosController::class, 'addCursos']);

//update Curso
Route::put('/updateCurso/{id}', [CursosController::class, 'updateCurso']);

//delete Curso
Route::delete('/deleteCurso/{id}', [CursosController::class, 'deleteCurso']);