<?php

use App\Controllers\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware('token:api')->group(function(){
//     Route::post('/pokemons', function (ApiController $api_controller) {
//         $api_controller->all_pokemons();
//     });
//     Route::post('/pokemon/{id}', array('uses' => 'ApiController@get_pokemon'));
// });

Route::get('/token', function (ApiController $api_controller, Request $request) {
    return $api_controller->get_token($request->header('username'), $request->header('password'));
});

Route::get('/pokemons', function (ApiController $api_controller) {
    return $api_controller->all_pokemons();
})->middleware('token:api');

Route::get('/pokemon/{id}', function (ApiController $api_controller, $id) {
    return $api_controller->get_pokemon($id);
})->middleware('token:api');