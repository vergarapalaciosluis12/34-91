<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cursocontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\calculadorasumacontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[productcontroller::class,'f_pepe']);

Route::get('curso/create',[CursoController::class,'create']);
Route::post('curso/store', [CursoController::class,'store'])->name('curso.store');
Route::get('curso/listar',[CursoController::class,'listar'])->name('curso.listar');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[Cursocontroller::class,'edit'])->name('curso.edit');
Route::get('suma/{num1}/{num2}',[calculadorasumacontroller::class,'suma']);




