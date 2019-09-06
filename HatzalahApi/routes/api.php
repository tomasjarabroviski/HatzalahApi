<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('direcciones', 'direccionesController');

Route::resource('usuario', 'misusuariosController');

Route::resource('circulo', 'circulo_familiarsController');

Route::resource('fichamedica', 'fichasmedicasController');

Route::resource('rescatistas', 'rescatistaController');