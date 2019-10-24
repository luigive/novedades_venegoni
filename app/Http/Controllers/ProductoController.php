<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::orderby('id')->get();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categoria::orderby('id')->get();
        return view('productos.crear',compact('categorias'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       //este codigo es para mover la foto de sitio!
       // if($request->hasfile('foto')) { 
       //   $file = $request->file('foto');
         // $extension = $file->getClientOriginalExtension(); // getting image extension
          //$filename =time().'.'.$extension;
          //$file->move('diseno/images/', $filename);
       // }

        $imgName = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('diseno/images'), $imgName);
        //Image::make($image->getRealPath())->resize(200, 200)->save($path);

        $data = $request->all();
        $data['foto'] = 'diseno/images/'.$data['foto'] ;
        //aqui lo sustituyo
       // $request->merge(['foto' => $file]);

        producto::create($data);  
         // cuiando uno imprime mensajes estos llegan por una variable de session 
         return redirect('/productos/crear')->with("mensaje","Producto Agregado con exito");    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
