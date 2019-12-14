<?php


Route::get('/', 'API\ProviderController@players_view');
Route::get('/player/{el}', ['uses'=>'API\ProviderController@details_view','as'=>'player.detail']);