<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplicationController extends Controller
{   //esto quiere decir que todos los metodos que van a estar adentro de este controlador
    //van a requerir que el usuario este autenticado..
    public function __construct() 
    {
        $this->middleware('auth');
    }
 
    public function aplicacion(){}  
}
