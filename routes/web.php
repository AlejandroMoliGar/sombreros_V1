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

Route::get('/*', function () {
    return view('welcome');
    
});
/*Route::get('/name/{}/lastname/{}',
function($name,$apellido){
    return 'hola soy ' . $name .' '. $apellido;
});
Route::get('/name/{}/lastname/{?}',
function($name,$apellido=null){
    return 'hola soy ' . $name .' '. $apellido;
});
Route::get('/name/{}/lastname/{?}',
function($name,$apellido=''){
    return 'hola soy ' . $name .' '. $apellido;
});
Route::get('/Pri/{num}/Segu/{num2}',
function($num,$num2){
$Suma=$num+$num2;
    return 'La suma es '. $Suma;
});*/

Route::get('/', 
function () {
    return 'Pantalla Principal';
    
});
Route::get('login', 
function () {
    return 'Login usuario';
    
});
Route::get('logout', 
function () {
    return 'Logout usuario';
    
});
Route::get('catalogs', 
function () {
    return 'Listado peliculas';
    
});
Route::get('catalogr/show/{id}', 
function ($id) {
    return 'vista detallada de pelicula '.$id;
    
});
Route::get('catalogs/create', 
function () {
    return 'Añadir pelicula';
    
});

Route::get('catalogs/edit/{id}', 
function ($id) {
    return 'Modificar pelicula '.$id;
    
});

Route::get('rutaprueba','PruebaController@prueba2');

Route::get('catalog/show/{id}','CatalogController@catalogshow');
Route::get('catalog','CatalogController@catalog');
Route::get('catalog/create','CatalogController@catalogcreate');
Route::get('catalog/edit/{id}','CatalogController@catalogedit');
Route::get('/','HomeController@home');

Route::resource('trainers','TrainerController');
Route::get('delete/{id}', 'TrainerController@destroy');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::name('print')->get('/imprimir', 'TrainerController@imprimir');