<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios', 'App\Http\Controllers\UserController@index'); //para mostrar todos los registros
Route::post('/usuarios', 'App\Http\Controllers\UserController@store'); //para crear un usuario
Route::get('/usuarios/{id}', 'App\Http\Controllers\UserController@show'); //para mostrar un usuario en especifico
Route::put('/usuarios/{id}', 'App\Http\Controllers\UserController@update'); //actualizar un usuario en especifico
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UserController@destroy'); //Elimina un usuario en especifico
