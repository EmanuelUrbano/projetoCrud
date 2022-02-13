<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function autenticar(Request $request){
        //regras para autenticar
        $rules =[
            'usuario'=>'required',
            'password'=>'required'
        ];
        //mensagem de erro
        $feedback=[
            'usuario.required' =>'hei parceiro ta esquecendo seu nome',
            'password.required'=>'sem password não passara!!'
        ];

        //validar se ta certo

        $request->validate($rules,$feedback);
        
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function cadastrar(Request $request)
    {
        $rules=[
            'nome'=>'required',
            'email'=>'email',
            'password'=>'required'
        ];
        $feedback=[
            'nome.required'=>'precisa de nome',
            'email.email'=>'não parece email',
            'password.required'=>'precisa de senha',
        ];

        User::create([
            'name'=> $request->input('nome'),
            'password'=> $request->input('password'),
            'email'=>$request->input('email')
        ]);
        return redirect(route('home'));
    }
    public function logout()
    {
        return redirect(route('home'));
    }
    
}
