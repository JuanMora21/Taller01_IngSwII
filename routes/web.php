<?php

use Illuminate\Support\Facades\Route;

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
});


Route::get('frameworks', function () {
    $angular = 'https://angular.io/' ;
    $vue = 'https://vuejs.org/' ;
    $react = 'https://es.reactjs.org/' ;
    $netcore = 'https://dotnet.microsoft.com/download' ;
    $laravel = 'https://laravel.com/' ;
    $spring = 'https://spring.io/projects/spring-framework' ;
    return view('frameworks', compact('angular','vue','react','netcore','laravel','spring'));
});

//Forma 2: usando el metodo with como array
Route::get('informacion1', function () {
    $nombre = "Juan Manuel Morales";
    $cedula = 1002653994;
    return view('informacion')->with(['nombre' => $nombre,
                                  'cedula' => $cedula]);
});

//Forma 3: Pasando un array como segundo parametro de la funcion view
Route::get('informacion2', function () {
    $nombre = "Juan Morales";
    $cedula = 1002653994;
    return view('informacion', ['nombre'=>$nombre, 
                            'cedula' => $cedula]);
});

//Forma 4: Pasando el metodo COMPACT como segundo parametro de la funcion view
Route::get('informacion3', function () {
    $nombre = "Juan Manuel";
    $cedula = 1002653994;
    return view('informacion', compact('nombre','cedula'));
});