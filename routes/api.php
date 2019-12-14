<?php

use Illuminate\Http\Request;

Route::post('/data-provider','API\ProviderController@importData')->name('get-data');
Route::get('/players','API\ProviderController@players_api')->name('players');
Route::get('/players/{id}','API\ProviderController@detail_api')->name('players.detail');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
