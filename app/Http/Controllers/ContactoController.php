<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
	//funcion solo para devolver el contactanos 
    public function index(){
    	return view('contacto.main');
    }
}
