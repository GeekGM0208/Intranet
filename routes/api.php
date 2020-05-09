<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//OBTENCION DEL MENU DE MODULOS DE INTRANET
Route::resource('modulos', 'ModulosController', ['only' => ['show']]);


//CONFIGURACION DE USUARIOS
Route::resource('usuarios', 'UserConfig\UserController', ['except' => ['destroy']]);
Route::resource('log', 'UserConfig\LogUserController', ['only' => ['show']]);
Route::resource('oficinas', 'UserConfig\OficinaController', ['except' => ['destroy']]);
Route::resource('aduanas', 'UserConfig\AduanaController', ['except' => ['destroy']]);