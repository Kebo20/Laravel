<?php

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
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

Route::resource('/productos', 'ProductoController');

Route::get("/kevin", 'ProductoController@insertar');
Route::get("/", function (Request $request) {
  
   // $user=Auth::user();
    //$request->session()->put(['nombre'=>$user->name]);
    //session([['email'=>$user->email]]);

    //return $request->session()->all();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdministradorController@index');
Route::get('/mail/send', 'MailController@send');
