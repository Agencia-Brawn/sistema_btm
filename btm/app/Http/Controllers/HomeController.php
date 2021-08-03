<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $telefone=Confing::get('telefone');
        $whatsapp=Confing::get('whatsapp');
        $instagram=Confing::get('instagram');
        $email=Confing::get('email');
        $facebook=Confing::get('facebook');
        $boleto=Confing::get('boleto');

        return view('home', [
        'telefone'=>$telefone,
        'whatsapp'=>$whatsapp,
        'instagram'=>$instagram,
        'email'=>$email,
        'facebook'=>$facebook,
        'boleto'=>$boleto
        ]);
        
    }

    public function topo1(Request $request)
    {
        // dd($request);
        Confing::atualizar('telefone',$request->telefone);
        Confing::atualizar('whatsapp',$request->whatsapp);
        Confing::atualizar('instagram',$request->instagram);
        Confing::atualizar('email',$request->email);
        Confing::atualizar('facebook',$request->facebook);
        Confing::atualizar('boleto',$request->boleto);
        return "ok";
    }
}