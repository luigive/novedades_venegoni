<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//aqui importo el modelo de la categoria al controlador para empeazar a usarlo 
use App\categoria;
use App\Http\Requests\CategoriaValidation;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = categoria::orderBy('id')->get();
        return view('categoria.index',compact('categorias'));
    }

    public function add(){
        return view('categoria.crear');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategoriaValidation $request)
    {

        categoria::create($request->all());  
         // cuiando uno imprime mensajes estos llegan por una variable de session 
         return redirect('/categoria/agregar')->with("mensaje","Categoria Agregado con exito");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         categoria::findOrFail($id)->update($request->all());
        return redirect('/categoria')->with("mensaje","Categoria Modificada con exito");
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
        $resultado = categoria::findOrFail($id);
        return view('categoria.crear',compact('resultado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        $resultado = categoria::destroy($id);
         return redirect('/categoria')->with("mensaje","Categoria Eliminada con exito");
    }
}
