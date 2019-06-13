<?php
use PhpParser\Node\Expr\PostDec;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // echo "<h1>Hola mundo de Marco</h1>";
});

// GET   : Conseguir datos
// POST  : Guardar datos
// PUT   : Actualizar recursos
// DELETE: Eliminar recursos

Route::get('/mostrar-fecha', function () {
    $titulo = "Estoy mostrando la fecha";
    $fecha = date('d-m-Y');
    return view('mostrar-fecha', array(
        'titulo' => $titulo,
        'fecha' => $fecha
    ));
});
// Para que el parametro no sea obligado se agrega un simbolo ?
Route::get('/pelicula/{titulo?}', function ($titulo = 'No hay una pelicula seleccionada') {
    return view('pelicula', array(
        'titulo' => $titulo
    ));
});
