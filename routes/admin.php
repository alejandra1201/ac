<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ComentarioController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PromocionController;
use App\Http\Controllers\Admin\ReservaController;
use App\Http\Controllers\Admin\RutaController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\SitioController;
use App\Http\Controllers\Admin\UserController;


Route::get('',[HomeController::class, 'index'])->name('admin.home');
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');
Route::resource('servicios', ServicioController::class)->names('admin.servicios');
Route::resource('sitios', SitioController::class)->names('admin.sitios');

Route::resource('promocions', PromocionController::class)->names('admin.promocions');
Route::resource('rutas', RutaController::class)->names('admin.rutas');
Route::resource('comentarios', ComentarioController::class)->names('admin.comentarios');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('reservas', ReservaController::class)->names('admin.reservas');
// Route::get('sitios/listar', SitioController::class 'index')->names('admin.sitios.listar');
 Route::get('listasitios',[SitioController::class,'indexlista'])->name('admin.sitios.listasitio');
 Route::get('listapromociones',[PromocionController::class,'indexlista'])->name('admin.promocions.listapromocion');
 Route::get('listacategorias',[CategoriaController::class,'indexlista'])->name('admin.categorias.listacategoria');
// Route::get('admin/listar/{sitio}', [SitioController::class,'listar'])->name('admin.sitios.listar');

