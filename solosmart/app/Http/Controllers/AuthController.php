<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function autenticacao(Request $request){

        //Verificar autenticação
        $user = User::where('email', $request->input('email'))->first();
        $hash = password_hash($user->password, PASSWORD_DEFAULT);
        if(!$user){
            echo 'negado user';
            return redirect()->route("login")->with('error','Email or password invalid');
        }
        if (!password_verify($request->input("senha"), $hash)) {
            return redirect()->route("login")->with('error','Email or password invalid');
        }else{
            return redirect()->route('home')->with('success','');
        }
    }

    public function cadastro(Request $request){
    {
        $newUser = User::where('email', $request->input('email'))->first();
    }
//
}
}