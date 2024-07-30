<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Throw_;

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
        if (!password_verify($request->input("senha"), $user->password)) {
            return redirect()->route("login")->with('error','Email or password invalid');
        }else{
            return redirect()->route('home')->with('success','');
        }
    }

    public function cadastrarUsuario(Request $request){
    {
        // Verificar se o usuário já existe
        $user = User::where('email', $request->input('email'))->first();
        
        // Validação e cadastro de usuário
        if(empty($user)){
            try {
                DB::table("users")->insert([
                'name' => $request->input('nome'),
                'email' => $request->input('email'),
                'password' => password_hash($request->input('senha'), PASSWORD_DEFAULT)
            ]);
            } catch (\Throwable $th) {
                Throw $th;
            }
            return redirect()->route('cadastro')->with('success','Usuário cadastrado com sucesso');
            
        } else if($user){
            return redirect()->route('cadastro')->with('errorEmailAlready','Email já cadastrado');
        }else{
            return redirect()->route('cadastro')->with('error','Encontramos um problema no cadastro');
        }
        
    }
//
}
}