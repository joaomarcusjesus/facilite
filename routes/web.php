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

Route::get('/para-voce', function(){
	return view('site.para-voce');
});

Route::get('/para-sua-casa', function(){
	return view('site.para-casa');
});

// Route::get('/meuhome', function(){
// 	return view ('aplicacao.meuhome');
// });
