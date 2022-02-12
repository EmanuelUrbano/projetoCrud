<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function autenticar(Request $request){
        
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function logout()
    {
        return redirect(route('home'));
    }
    
}
