<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class IndexController extends Controller
{
    //
    public function index(){
        dd(Confing::atualizar('telefone1','(99)99'));
        // return view("index");
    }

    
}
