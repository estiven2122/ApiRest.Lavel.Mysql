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

Route::get('categoria','App\Http\Controllers\CategoriaController@getCategoria');

Route::get('categoria/{id}','App\Http\Controllers\CategoriaController@getCategoriaxid');

Route::post('addCategoria','App\Http\Controllers\CategoriaController@insertcategoria');

Route::put('updateCategoria/{id}','App\Http\Controllers\CategoriaController@updatecategoria');

Route::delete('deleteCategoria/{id}','App\Http\Controllers\CategoriaController@deletecategoria');
