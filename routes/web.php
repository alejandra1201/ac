<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

// Route::get('/', function () {
//     return 'hola 4750';
// });
Route::get('/',function () {
    return view('home');
    });


Route::get('cursos',[CursoController::class,'index'])->name('cursos.index');
Route::post('cursos', [CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');
Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');
Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');
Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');
// Route::get('listasitios',[SitioController::class,'index'])->name('admin.sitios.listasitio');


Route::get('/login', 'App\Http\Controllers\UserController@login');
Route::get('/login', [UserController::class, 'login']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Auth::routes();
