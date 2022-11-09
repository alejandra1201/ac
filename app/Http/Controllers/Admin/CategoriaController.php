<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Image;
use App\Models\Sitio;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Facades\Http;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categorias = Categoria::all();
        // $images = Image::all();

        // return view('admin.categorias.index', compact('categorias', 'images'));

        $categories = Http::get('http://api.ac.test/v1/categories/');

        $categoriesArray = $categories->json();

        return  $categoriesArray;

        return view('admin.categories.index',compact('categoriesArray'));


    }
    public function indexlista()
    {
        $categoria = Categoria::all();
        $images = Image::all();

        return view('admin.categorias.listacategoria', compact('categorias', 'images'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        Http::post('http://api.ac.test/v1/categories',$request->all());
        // $categoria = new Categoria();
        // //crear una categoria
        // $file=$request->file("image_categoria");
        // $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        // $request->file('image_categoria')->storeAs('imagenes',$nombreArchivo );
        // $categoria->create(['nombre_categoria'=>$request->nombre_categoria])->images()->create(['url'=> $nombreArchivo]);

    // $categoria=Categoria::find($temp->imageable_id);
 
    // $temp= $categoria->create(['nombre_categoria'=>'holaaa'])->images()->create(['url'=>'pdf_1659463228.pdf']);
    // $categoria=Categoria::find($temp->imageable_id);
    // $categoria->images()->create(['url'=>'pdf_1659463229.pdf']);
    // $categoria->images()->create(['url'=>'pdf_1659463230.pdf']);
    
    
    return redirect()->route('admin.categorias.index')->with('info','la categoria se creo con exito');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Categoria $categoria)
    {
        //crear una categoria
        $file=$request->file("image_categoria");
        $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        $request->file('image_categoria')->storeAs('imagenes',$nombreArchivo );
        $categoria->create(['nombre_categoria'=>$request->nombre_categoria])->images()->create(['url'=> $nombreArchivo]);

 
    return redirect()->route('admin.categorias.index', $categoria)->with('info','la categoria actualizo con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('admin.categorias.index')->with('info','la categoria se elimino con exito');
    }
}
