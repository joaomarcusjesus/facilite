<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrar', 'Account\AccountController@index');

// AccountController
Route::group(['namespace' => 'Account'], function(){
	
	Route::get('/cadastrar', [
		'uses' 	=> 'AccountController@create',
		'as'	=> 'cadastrar' // -< Rota nomeada
		]);

});