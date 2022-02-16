<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\produto1;
use App\categoria;
use App\image;


class adminController extends Controller
{
    
    public function adm()
    {
        return view('admin', ['produtos' => produto1::all(), 'categoria'=>categoria::all(),'image'=> image::all()]);
    }
    public function add(Request $request){
       
        return view('add');
    }
    public function addERedirect(Request $request){

        
        
        $produto = new produto1();
        
        $produto->name = $request->input('nomeDoProduto');
        $produto->description = $request->input('descricaoDoProduto');
        $produto->price = $request->input('precoDoProduto');
        $produto->category_id = $request->input('categoriaDoProduto');
        $produto->quantity = $request->input('quantidadeDoProduto');
        $produto->save();

        $imagemDoProduto=new image();
        
        $image=$request->file('imagemDoProduto');
        $imageName = $request->file('imagemDoProduto')->getClientOriginalName();
        $path= $image->store('products',  'public');
        $path1= '/storage/'.$path;

        $imagemDoProduto->produtos_id=$produto->id;
        $imagemDoProduto->name=$imageName;
        $imagemDoProduto->url=$path1;
        $imagemDoProduto->save();
        return redirect()->route('admin');
        
    }
    public function delete(){
        return view('delete');
    }

    public function delete1(int $p){
        $produto = produto1::find($p);
        $produto->delete();
        return redirect(route('admin'));
    }

    public function update1(int $p){
        $produt = produto1::find($p);
     
        return view('update1', ['p'=>$produt]);
    }

    public function update(){
        return view('update', ['produtos'=>produto1::all()]);
    }
    public function updateERedirect(Request $request){
        $produto = produto1::find($request->input('idDoProduto'));
        $produto->name = $request->input('nomeDoProduto');
        $produto->description = $request->input('descricaoDoProduto');
        $produto->price = $request->input('precoDoProduto');
        $produto->category_id = $request->input('categoriaDoProduto');
        $produto->quantity = $request->input('quantidadeDoProduto');
        $produto->save();

        $imagemDoProdutoVelha=image::where('produtos_id',$request->input('idDoProduto'));
        
        if($request->input('ftAntiga?')=='1'){
            return redirect(route('admin'));
        }else {
            //$imagemDoProduto=new image();
        
            $image=$request->file('imagemDoProduto');
            //$imageName = $image->getClientOriginalName();
            //$path= $image->store('products',  'public');
            //$path1= '/storage/'.$path;
    
            //$imagemDoProduto->produtos_id=$produto->id;
            //$imagemDoProduto->name=$imageName;
            //$imagemDoProduto->url=$path1;
            //$imagemDoProduto->save();
            //return redirect()->route('admin');
            return dd($image);
        }
        //$image=$request->file('imagemDoProduto');
        //$imageName = $request->file('imagemDoProduto')->getClientOriginalName();
        //$path= $image->store('products',  'public');
        //$path1= '/storage/'.$path;

        //$imagemDoProduto->produtos_id=$produto->id;
        //$imagemDoProduto->name=$imageName;
        //$imagemDoProduto->url=$path1;
        //$imagemDoProduto->save();
        //return redirect(route('admin'));
        //return dd($imagemDoProduto);
    }

}
