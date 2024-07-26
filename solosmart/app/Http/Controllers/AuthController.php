<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function autenticacao(Request $request)
    {
        return "esperando a lógica";
    }

    public function cadastro()
    {
        return view('cadastro');
    }
//
}
