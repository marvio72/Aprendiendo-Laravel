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

Route::get('/peliculas/{pagina?}', 'PeliculaController@index');
Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::resource('usuario', 'UsuarioController');

Route::get('/redirigir', 'PeliculaController@redirigir' );

// GET   : Conseguir datos
// POST  : Guardar datos
// PUT   : Actualizar recursos
// DELETE: Eliminar recursos

// Route::get('/mostrar-fecha', function () {
//     $titulo = "Estoy mostrando la fecha";
//     $fecha = date('d-m-Y');
//     return view('mostrar-fecha', array(
//         'titulo' => $titulo,
//         'fecha' => $fecha
//     ));
// });


// Con parametro obligatorio
// Route::get('/pelicula/{titulo}', function ($titulo) {
//     return view('pelicula', array(
//         'titulo' => $titulo
//     ));
// });

// Para que el parametro no sea obligado se agrega un simbolo ?
// Route::get('/pelicula/{titulo?}', function ($titulo = 'No hay una pelicula seleccionada') {
//     return view('pelicula', array(
//         'titulo' => $titulo
//     ));
// });

// Con condicionales
// Route::get('/pelicula/{titulo}/{year?}', function ($titulo = 'No hay una pelicula seleccionada', $year = 2019) {
//     return view('pelicula', array(
//         'titulo' => $titulo,
//         'year'   => $year
//     ));

// })->where(array(
//     'titulo' => '[a-z A-Z]+',
//     'year'   => '[0-9]+'
// ));

//CON ARRAY
// Route::get('/listado-peliculas', function () {
//     $titulo = 'Listado de peliculas con array';
//     return view('peliculas.listado', array(
//         'titulo' => $titulo
//     ));
// });

//CON WITH
// Route::get('/listadopelis', function () {
//     $titulo = 'Listado de Peliculas con with';
//     $listado = array('Batman','Spiderman','El profeta increible');
//     return view('peliculas.listado')
//         ->with('titulo',$titulo)
//         ->with('listado',$listado);
// });

// Route::get('/pagina-generica', function () {
//     return view('pagina');
// });