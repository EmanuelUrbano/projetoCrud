<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produto1;
use App\categoria;

class start extends Controller
{
   
    public function start(){

       return view('start', ['produto1'=>produto1::all(), 'categoria'=>categoria::all()]);
    }
}
