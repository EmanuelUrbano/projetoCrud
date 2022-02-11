<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function logout()
    {
        return redirect(route('home'));
    }
    public function receberInformacoes(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $confirmarSenha = $request->input('confirmarSenha');
        $dataNascimento = $request->input('dataNascimento');
        $sexo = $request->input('sexo');

        echo 'Nome: '.$nome.'<br>';

    }
}
