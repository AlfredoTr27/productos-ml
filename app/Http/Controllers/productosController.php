<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function index(){

        //define el servidor local y el puerto
        $host = 'localhost';
        $puerto = '27017';

        $conexion = new \MongoDB\Client("mongodb://$host:$puerto");

        $filtrar = array();
        $options = array();
        $coleccion = $conexion->pruebaML->productos;
        $datos = $coleccion->find($filtrar,$options);
    

        return view('productos', compact('datos'));
    }
}
