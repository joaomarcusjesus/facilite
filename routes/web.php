<?php

/********************** Rotas do Site ********************/
Route::get('/', function(){
	return view('site.home');
});

Route::get('/para-voce', function(){
	return view('site.para-voce');
});

Route::get('/para-sua-casa', function(){
	return view('site.para-casa');
});
/***************************//****************************/

/******************** AuthController *********************/
Route::group(['namespace' => 'Auth'], function(){

	// Login
	Route::get('/login', [
		'uses' 	=> 'LoginController@login',
		'as'	=> 'login' // <- Rota nomeada
		]);

	// PostLogin
	Route::post('/login', [
		'uses' 	=> 'LoginController@postLogin',
		'as'	=> 'postLogin' // <- Rota nomeada
		]);

	// Logout
	Route::post('/logout', [
		'uses' 	=> 'LoginController@logout',
		'as'	=> 'logout' // <- Rota nomeada
		]);

	// Cadastro
	Route::get('/cadastrar', [
		'uses' 	=> 'RegisterController@cadastrar',
		'as'	=> 'cadastrar' // -< Rota nomeada
		]);

	// PostCadastro
	Route::post('/cadastrar', [
		'uses' 	=> 'RegisterController@postCadastrar',
		'as'	=> 'postCadastrar' // -< Rota nomeada
		]);

});
/***************************//****************************/




/* Auth do Laravel */

// Auth::routes();