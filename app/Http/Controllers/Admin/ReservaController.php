<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Reserva;
use App\Models\Sitio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ReservaController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reservas = Reserva::all();
 
        // return view('admin.reservas.index', compact('reservas'));
        $reservas = Http::get('http://api.ac.test/v1/reservas/');
        $reservasArray = $reservas->json();
        return  $reservasArray;
        return view('admin.reservas.index',compact('reservasArray'));

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sitios = Sitio::all();
        $categorias = Categoria::all();
        return view('admin.reservas.create', compact('sitios','categorias'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     


        $reserva = new Reserva();
        //crear un sitio
        $reserva->estado = $request->estado;
         $reserva->correo = $request->correo;
        $reserva->fechaReserva = $request->fechaReserva;
        $reserva->contacto = $request->contacto;
        $reserva->descripcionReserva= $request->descripcionReserva;
        $reserva->save();

        
    return redirect()->route('admin.reservas.index',$reserva)->with('info','la reserva se creo con exito');
        
        //  //Datos Categoria
        //  $categoria = Categoria::create($request->all());
        //  $categoria->idUser  = $categoria->id;
        //  $categoria->save();
        //  return view('admin.reservas.show',compact('reserva','categoria'));
      
      
        // $categoria = Categoria::create($request->all());
             
        // return redirect()->route('admin.reservas.edit', $reserva);

        // //Datos sitio
        //  $sitio = Sitio::create($request->all());
        //  $reserva->idSitio  = $sitio->id;
        //  $reserva->save();
        //  return view('admin.promocions.show',compact('reserva','sitio'));
 
 
        // $reserva = Reserva::create($request->all());
        
        // return redirect()->route('admin.reservas.edit', $reserva)->with('info','la promocion se actualizo con exito');

    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        return view('admin.reservas.show',compact('reserva'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        return view('admin.reservas.edit',compact('reserva'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Reserva $reserva)
    {
        $reserva->estado = $request->estado;
        $reserva->correo = $request->correo;
        $reserva->fechaReserva = $request->fechaReserva;
        $reserva->contacto = $request->contacto;
        $reserva->descripcionReserva= $request->descripcionReserva;
        $reserva->save();

        return view('admin.reservas.index',compact('reserva'));
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('admin.reservas.index')->with('info','la reserva se elimino con exito');
    }
}
 
