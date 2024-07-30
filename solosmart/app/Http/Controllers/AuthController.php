<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function cadastro(){
        return view('cadastro');
    }

    public function autenticacao(Request $request){

        //Verificar autenticação
        $user = User::where('email', $request->input('email'))->first();
        if(!$user){
            echo 'negado user';
            return redirect()->route("login")->with('error','Email or password invalid');
        }
        if (!password_verify($request->input("senha"), password_hash($user->password, PASSWORD_DEFAULT))) {
            return redirect()->route("login")->with('error','Email or password invalid');
        }else{
            return redirect()->route('home')->with('success','');
        }
    }

    public function cadastrarUsuario(Request $request){
    {
        // Validação meia boca e cadastro de usuário (não está funcionando)
        if(isset($request)){
            DB::table("users")->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => password_hash($request->input('senha'), PASSWORD_DEFAULT)
            ]);
        }
        
    }
//
}
}