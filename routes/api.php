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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/favories', 'RecetteController@favorie');
    Route::get('/recettebyuser', 'RecetteController@recipecreatebyuser');
    Route::apiResource('/recettes', 'RecetteController');
    Route::post('/updateuser', 'AuthentificationController@updateuser');
    Route::post('/updaterecette/{id}', 'RecetteController@update');
    Route::post('/delete/{id}', 'RecetteController@destroy');
    Route::post('/favorie-add/{id}', 'RecetteController@favorierecetteadd');
    Route::post('/favorie-delete/{id}', 'RecetteController@favorierecettedelete');
    Route::get('/favoriebyrecette/{id}', 'RecetteController@favoriebyrecette');
    Route::get('/commentaire/{id}', 'CommentaireController@index');
    Route::post('/commentaire-add', 'CommentaireController@create');
    Route::post('/delete-compte', 'AuthentificationController@destroy');
    
});


Route::post('/register', 'AuthentificationController@register');
Route::post('/login', 'AuthentificationController@login');
