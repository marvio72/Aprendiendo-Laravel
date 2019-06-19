<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null){
        return view('pelicula.detalle');
    }

    public function redirigir(){
        // con action
        // return redirect()->action('PeliculaController@detalle');
        // por medio de una ruta
        // return redirect('/peliculas');
        // por medio de route
        return redirect()->route('detalle.pelicula');
    }
}
