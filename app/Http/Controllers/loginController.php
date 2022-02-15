<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function autenticar(Request $request){
        //regras para autenticar
        $rules =[
            'name'=>'required',
            'password'=>'required'
        ];
        //mensagem de erro
        $feedback=[
            'name.required' =>'hei parceiro ta esquecendo seu nome',
            'password.required'=>'sem password não passara!!'
        ];

        //validar se ta certo

        $credent = $request->validate($rules,$feedback);


        //tentar autenticar com essas credenciais validas se estiver no banco retornar true,
        // e reiniciara a sessão do usuario para que não haja vunerabilidade de session fixation
        //(vunerabildade que utilizada o identificador de sesssão de outra pessoa)
        //        |
        //        V

        //if(Auth::attempt($credent)){
        //    $request->session()->regenerate();
        //    
        //    return redirect(route('admin'));
        //}

        $name= $request->get('name');
        $password= $request->get('password');
        
        $usuario = new User();
        $existe = $usuario->where('name',$name)->where('password',$password)->get()->first();
        
        if (isset($existe->name)) {
            $request->session()->regenerate();
            $_SESSION['name']=$existe->name;
            $_SESSION['email']=$existe->email;

            return redirect(route('admin'));
        }

        return back()->withErrors([
            'name'=>'não acho'
        ]);

    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function cadastrar(Request $request)
    {
        $rules=[
            'nome'=>'required',
            'email'=>['required','email'],
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
