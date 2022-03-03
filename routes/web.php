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
Route::get('/', array('as' => '/', 'uses' => 'App\Controllers\HomeController@index'));
Route::get('pokemon/index', array('as' => 'pokemon', 'uses' => 'App\Controllers\PokemonController@index'));
Route::get('pokemon/edit', array('as' => 'pokemon', 'uses' => 'App\Controllers\PokemonController@edit'));
Route::post('pokemon/save', array('as' => 'pokemon', 'uses' => 'App\Controllers\PokemonController@pokemon_save'));
Route::get('home', function () {
    return redirect('/')->with('success', 'Pokemon updated successfully.');
});