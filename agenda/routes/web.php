<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use App\User;
use App\Http\Middleware\ApiAuthMiddleware;


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
    return view('auth.login');
});
//Route::get('/register', function () {
    //return view('auth.register');
//});
Route::get('/cita', function (){
    return view('/cita/cita');
})->name('cita');

Route::post('/clientes/create', 'ClienteController@create')->name('crearcliente');
Route::get('/clientes/vista', 'ClienteController@vista');
Route::post('/agendas/index', 'AgendaController@index')->name('listaragendas');
Route::post('/cita/create', 'CitaController@create')->name('crearcita');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/agendas/create', 'AgendaController@create')->name('crearagenda')->middleware('auth');
Route::get('/agendas/delete', 'AgendaController@delete')->name('delete')->middleware('auth');
Route::get('/agendas/show', 'AgendaController@show')->name('mostraragendas')->middleware('auth');
Route::get('/cita/index', 'CitaController@index')->name('listarcitas')->middleware('auth');
Route::post('/user/login', 'UserController@login')->name('usuariologin')->middleware('auth');
Route::post('/user/update', 'UserController@update')->name('usuarioupdate')->middleware('auth');
Route::post('/user/register', 'UserController@register')->name('registrarusuario')->middleware('auth');
Route::get('/crear/agenda',function(){
	$hoy= Carbon::now();
  $hoy = $hoy->toDateString();
  return view('crearagenda',compact('hoy'));
})->name('vistacrearagenda')->middleware('auth');
Route::get('/eliminar/agenda',function(){
  $hoy= Carbon::now();
  $hoy = $hoy->toDateString();
  return view('eliminaragenda',compact('hoy'));
})->name('eliminaragenda')->middleware('auth');
Route::get('/crear/usuario',function(){
  return view('crearusuario');
})->name('crearusuario')->middleware('auth');
Route::get('/login',function(){
return view('loginusuario');
})->name('login')->middleware('auth');

Route::get('/registrar',function(){
return view('crearusuario');
})->name('registrar');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


