<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use App\Models\Sitio;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComentarioController extends Controller
{

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            // $comentarios = Comentario::all();
            $comentarios = Http::get('http://api.ac.test/v1/comentarios/');
            $comentariosArray = $comentarios->json();
            return  $comentariosArray;
    
            return view('admin.comentarios.index', compact('comentarios'));
        }
     
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $users = User::all();
            $sitios = Sitio::all();
    
            return view('admin.comentarios.create', compact('sitios','users'));

        }
     
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $comentario = new Comentario();
            //crear un comentario
            $comentario->mensaje = $request->mensaje;
            
            $comentario->save();
            // return view('admin.comentarios.show',compact('comentario'));
            return redirect()->route('admin.sitios.index')->with('info','El comentario se agrego  con exito');
         }
     
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Comentario $comentario)
        {
            return view('admin.comentarios.show',compact('comentario'));
        }
     
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Comentario $comentario)
        {
            return view('admin.comentarios.edit',compact('comentario'));
        }
     
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,Comentario $comentario)
        {

            
             //crear un comentario
             $comentario->mensaje = $request->mensaje;
             $comentario->save();
            return redirect()->route('admin.comentarios.index', $comentario)->with('info','el comentario se actualizo con exito');
        }
     
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy( Comentario $comentario)
        {
            $comentario->delete();
            return redirect()->route('admin.comentarios.index')->with('info','el comentario se elimino con exito');
        }
    }
     
    
