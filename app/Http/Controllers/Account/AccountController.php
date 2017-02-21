<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest\AccountStoreFormRequest;

class AccountController extends Controller
{

    public function __construct()
    {

    	//

    }

    public function index()
    {
        
    	// return "test";

    }

    public function create()
    {

        // return view('aplicacao.cadastrar');

    }

    public function store(AccountStoreFormRequest $request)
    {

    	//

    }

    public function show($id)
    {

    	//

    }

    public function edit($id)
    {

    	//

    }

    public function update(AccountStoreFormRequest $request, $id)
    {

    	//

    }

    public function destroy($id)
    {

        //

    }

}
