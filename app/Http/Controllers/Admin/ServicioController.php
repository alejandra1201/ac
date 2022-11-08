<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Servicio;
use App\Models\Sitio;
use Illuminate\Support\Facades\Http;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
    //     $servicios = Servicio::all();
    //     return view('admin.servicios.index', compact('servicios'));
    $servicios = Http::get('http://api.ac.test/v1/servicios/');
    $serviciosArray = $servicios->json();
     return  $serviciosArray;
     return view('admin.servicios.index',compact('serviciosArray'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitios = Sitio::all();
        return view('admin.servicios.create',  compact('sitios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Http::post('http://api.ac.test/v1/servicios/',$request->all());
        return $request;
    // $servicio = new Servicio();
    //        //crear un servicio
    //  $servicio->valorServicio = $request->valorServicio;
    //  $servicio->nombreServicio = $request->nombreServicio;
    //  $servicio->save();

 
    // return redirect()->route('admin.servicios.index', $servicio)->with('info','El servicio se creo con exito');
       }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return view('admin.servicios.show',compact('servicio'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        return view('admin.servicios.edit',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Servicio $servicio)
    {
          //crear un servicio
     $servicio->valorServicio = $request->valorServicio;
     $servicio->nombreServicio = $request->nombreServicio;
     $servicio->save();
    //  //datos de sitio
    // $sitio = Sitio::create($request->all());
    // $servicio->idSitio  = $sitio->id;
    // $servicio->save();
    // return view('admin.servicios.show',compact('servicio','sitio'));
 
           return redirect()->route('admin.servicios.edit', $servicio)->with('info','El servicio se acrtualizo con exito');
       }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('admin.servicios.index')->with('info','El servicio se elimino con exito');
    }
}
