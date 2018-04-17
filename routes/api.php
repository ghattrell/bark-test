<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Guestbook\Models\Entry;

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

/**
 ** Basic Routes for a RESTful service:
 **
 ** Route::get($uri, $callback);
 ** Route::post($uri, $callback);
 ** Route::put($uri, $callback);
 ** Route::delete($uri, $callback);
 **
 **/

Route::get('entries', 'EntriesController@index');

Route::get('entries/{id}', 'EntriesController@show');

Route::post('entries','EntriesController@save');

Route::put('entries/{id}','EntriesController@update');

Route::delete('entries/{id}', 'EntriesController@delete');
