<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use Illuminate\http\Request;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Rutas para usuarios desarrolladores

Route::get('/me/apps', function(){
    return view('aplicaciones.index');
})-> name('index');

Route::get('apps/crear_app', function(){
   return  view('aplicaciones.create');
})-> name('create');

Route:: post('/me/apps', function(Request $request){
    return   dd($request->all());;
})-> name('store');

//Route:: get('/apps', ' UsersController@aplicaciones');

//Rutas para los desarrolladores
/*Route::get('/me/apps', 'DeveloperController@index') -> name('index');
Route:: get('apps/crear_nueva', 'DeveloperController@create')-> name('create');
Route::post('/me/apps', 'DeveloperController@store')-> name('store');
Route:: get('/me/editar_app', 'DeveloperController@editAplication');
Route:: delete('/me/baja_app/{id}','DeveloperController@deleteAplication');*/
