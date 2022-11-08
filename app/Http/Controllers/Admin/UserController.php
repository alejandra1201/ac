<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $user = User::all();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        
        // $file=$request->file("image_user");
        // $nombreArchivo = "jpg_".time().".".$file->guessExtension();
        // $request->file('image_user')->storeAs('public/imagenes',$nombreArchivo );
        // $user->image_sitio = $nombreArchivo;


        // $user->save();
        
         return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $user = new User();
    //crear una categoria
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;

    
    $user->save();
    
 
    // //Adjuntar imagen Usuario
    // $image = new Image();
    // $file=$request->file("image");
    // $nombreArchivo = "jpg_".time().".".$file->guessExtension();
    // $request->file('image')->storeAs('public/imagenes',$nombreArchivo );
    // $image->url = $nombreArchivo ;

    // //$image->imageable_id = '1';
    // $image->imageable_type = 'App\Models\User';
    // $image->user_id = Auth()->user()->id;
    // $image->save();

    // return redirect()->route('admin.imagenes',  compact('image','categoria'));
    // }
    //     public function imagenes ( Image $image, User $user)
    // {
    
    //    $image->imageable_id = $user->id;
    //    $image->save();

    //    return redirect()->route('admin.sitios.index')->with('info','la categoria se creo con exito');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
       
     $user->roles()->sync($request->roles);
     
 
    return redirect()->route('admin.users.edit', $user)->with('info','se asigno los roles correctamente');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( User $user)
    {
        // $user->delete();

        // return redirect()->route('admin.users.index')->with('info','la categoria se elimino con exito');
    }
}
