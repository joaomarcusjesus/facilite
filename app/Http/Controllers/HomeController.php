<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        // Só entra no middleware auth na hora de visualizar os perfis
        $this->middleware('auth')->only('showProfile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aplicacao.meuhome');
    }

    public function showProfile(){
        return "Teste";
    }
}
