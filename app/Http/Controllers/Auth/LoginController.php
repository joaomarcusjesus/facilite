<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth; // <- Necessário importar a facade Auth para verificar os dados do Login
use App\Http\Requests\Auth\LoginFormRequest; // <- Classe de regras e mensagens de validação de login

class LoginController extends Controller
{
    public function __construct()
    {
        // Middleware 'guest': Se tiver sessão ativa redireciona para '/' e não mostra a page de login
    	$this->middleware('guest')->only('login');
    }

    public function index()
    {
    	// return "test";
    }

    public function login()
    {
    	return view('autenticacao.login');
    }

    public function postLogin(LoginFormRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
            // Dados corretos: faz o login e redireciona para '/'
            return redirect()->intended('/');
        } else {
            // Dados incorretos: retorna para a page de login informando os erros (LoginFormRequest)
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}