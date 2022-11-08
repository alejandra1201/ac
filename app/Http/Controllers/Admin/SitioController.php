<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\Sitio;
use App\Models\User;
use Illuminate\Http\Request;
Use App\Models\Categoria;
use App\Models\Image;
use App\Models\Tipo_Sitio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
 
class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//  $sitios = Sitio::all();
//     return view('admin.sitios.index', compact('sitios'));
            
    // $sitios = Http::get('http://api.ac.test/v1/sitios/');
                
    // $sitiosArray = $sitios->json();
    // return  $sitiosArray;
    // return view('admin.sitios.index',compact('sitiosArray'));


    $sitios = Http::get('http://api.ac.test/v1/sitios/');
    $sitiosArray = $sitios->json();
    return  $sitiosArray;

    return view('admin.sitios.index', compact('sitiosArray'));

    }

    public function indexlista()
    {
        $sitios = Sitio::all();
        
        
        return view('admin.sitios.listasitio', compact('sitios'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
         $categorias = Categoria::all();
         return view('admin.sitios.create',  compact('categorias'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
         Http::post('http://api.ac.test/v1/sitios/',$request->all());
        //  return $request;
        
        // $sitio = new Sitio();
        // //crear un sitio
       
        // //Adjuntar Imagenes
        // $file=$request->file("image_sitio");
        // $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        // $request->file('image_sitio')->storeAs('imagenes',$nombreArchivo );
        // $sitio->create(['direccion'=>$request->direccion,'municipio'=>$request->municipio,'Contacto'=>$request->Contacto,'descripcion'=>$request->descripcion,'sitio_web'=>$request->sitio_web,'rutas'=>$request->rutas,'nombre_sitio'=>$request->nombre_sitio])->images()->create(['url'=> $nombreArchivo,]);
        //  return redirect()->route('admin.sitios.index')->with('info','el sitio se creo con exito');
       
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sitio $sitio)
    {
        return view('admin.sitios.show',compact('sitio'));
    }
   
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sitio $sitio)
    {
        return view('admin.sitios.edit',compact('sitio'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Sitio $sitio)
    {
        //crear un sitio
        $sitio->nombre_sitio = $request->nombre_sitio;
        $sitio->direccion = $request->direccion;
        $sitio->municipio = $request->municipio;
        $sitio->Contacto = $request->Contacto;
        $sitio->descripcion = $request->descripcion;
        $sitio->sitio_web = $request->sitio_web;
        $sitio->rutas = $request->rutas;

        $file=$request->file("image_sitio");
        $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        $request->file('image_sitio')->storeAs('public/imagenes',$nombreArchivo );
        $sitio->image_sitio = $nombreArchivo;
       
        $sitio->save();
        return redirect()->route('admin.sitios.index')->with('info','el sitio se actualizo con exito');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitio $sitio)
    {
        $sitio->delete();
 
        return redirect()->route('admin.sitios.index')->with('info','El servicio se elimino con exito');
    }
}
 
