<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promocion;
use App\Models\Sitio;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PromocionController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
 
        // return view('admin.promocions.index', compact('promocions'));
        $promocions = Http::get('http://api.ac.test/v1/promocions');
        $promocionsArray = $promocions->json();
        return  $promocionsArray;
        return view('admin.promocions.index',compact('promocionsArray'));
        
    
    }

    public function indexlista()
    {
        $promocions = Promocion::all();
 
        return view('admin.promocions.listapromocion', compact('promocions'));
    }




 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        $sitios = Sitio::all();
        return view('admin.promocions.create',  compact('sitios'));
     
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          
        Http::post('http://api.ac.test/v1/promocions',$request->all());
        // $promocion = new Promocion();

        // //crear una categoria
        // $file=$request->file("image_promocion");
        // $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        // $request->file('image_promocion')->storeAs('imagenes',$nombreArchivo );
        // $promocion->create(['tipo_promocion'=>$request->tipo_promocion,'descripcionpromocion'=>$request->descripcionpromocion,'descuento'=>$request->descuento,'fechai'=>$request->fechai,'fechaf'=>$request->fechaf])->images()->create(['url'=> $nombreArchivo,]);
   
     return redirect()->route('admin.promocions.index')->with('info','la promocion se actualizo con exito');
    }



 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promocion $promocion)
    {
        return view('admin.promocions.show',compact('promocion'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocion $promocion)
    {
        return view('admin.promocions.edit',compact('promocion'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Promocion $promocion)
    {
        $promocion = new Promocion();

        //crear una categoria
        $file=$request->file("image_promocion");
        $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        $request->file('image_promocion')->storeAs('imagenes',$nombreArchivo );
        $promocion->create(['tipo_promocion'=>$request->tipo_promocion,'descripcionpromocion'=>$request->descripcionpromocion,'descuento'=>$request->descuento,'fechai'=>$request->fechai,'fechaf'=>$request->fechaf])->images()->create(['url'=> $nombreArchivo,]);


        return redirect()->route('admin.promocions.edit', $promocion)->with('info','la promocion se actualizo con exito');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Promocion $promocion)
    {
        $promocion->delete();
        return redirect()->route('admin.promocions.index')->with('info','la promocion se elimino con exito');
    }
}
 




