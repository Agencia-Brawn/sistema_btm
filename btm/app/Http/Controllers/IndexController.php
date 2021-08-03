<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class IndexController extends Controller
{

    public function index(){
        // dd(Confing::atualizar('telefone1','(99)99'));
        $telefone=Confing::get('telefone');
        $whatsapp=Confing::get('whatsapp');
        $email=Confing::get('email');
        $instagram=Confing::get('instagram');
        $facebook=Confing::get('facebook');
        $boleto=Confing::get('boleto');

        return view("index",[
            'telefone'=>$telefone,
            'whatsapp'=>$whatsapp,
            'email'=>$email,
            'instagram'=>$instagram,
            'facebook'=>$facebook,
            'boleto'=>$boleto

        ]);

        
    }
    
}
