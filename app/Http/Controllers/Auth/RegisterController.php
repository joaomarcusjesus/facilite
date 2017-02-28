<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User; // <- Classe de Usuario
use App\Http\Requests\Auth\RegisterFormRequest; // <- Classe de regras e mensagens de validação de Cadastro

class RegisterController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        // Middleware 'guest': Se tiver sessão ativa redireciona para '/' e não mostra a page de cadastro
    	$this->middleware('guest')->only('cadastrar');
    	$this->userRepository = $userRepository;
    }

    public function index()
    {
    	// return "test";
    }

    public function cadastrar()
    {
        return view('autenticacao.cadastrar');
    }

    public function postCadastrar(RegisterFormRequest $request)
    {

        // Pega todos os dados vindo do formulário
        $dataForm = $request->all();

        // Se checkbox estiver marcado = 1, senão = 0
        $dataForm['is_prof'] = ( !isset($dataForm['is_prof']) ) ? 'false' : 'true';

        // return dd($dataForm);

        // Insere na base de Dados
        return $this->userRepository->create($dataForm);
    }

    public function show($id)
    {
    	//
    }

    public function edit($id)
    {
    	//
    }

    public function update(Request $request, $id)
    {
    	//
    }

    public function destroy($id)
    {
        //
    }
}
