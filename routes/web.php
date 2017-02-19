<?php

// AccountController
Route::group(['namespace' => 'Account'], function(){
	
	Route::get('/cadastrar', [
		'uses' 	=> 'AccountController@create',
		'as'	=> 'cadastrar' // -< Rota nomeada
		]);

});
// /AcountController

Route::get('/', function(){
	return view('site.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
