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
        $slide1=Confing::get('slide1');
        $slide2=Confing::get('slide2');
        $slide3=Confing::get('slide3');

        return view('home', [
        'telefone'=>$telefone,
        'whatsapp'=>$whatsapp,
        'instagram'=>$instagram,
        'email'=>$email,
        'facebook'=>$facebook,
        'boleto'=>$boleto,
        'slide1'=>$slide1,
        'slide2'=>$slide2,
        'slide3'=>$slide3

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

    public function slide(Request $request)
    {
        // dd($request->slide1);
        if ($request->hasFile('slide1')) 
        {
            $extension = $request->slide1->extension();
            $path = $request->slide1->storeAs('public/images', "slide1.$extension");
            Confing::atualizar('slide1',$path);
        }

        if ($request->hasFile('slide2')) 
        {
            $extension = $request->slide2->extension();
            $path = $request->slide2->storeAs('public/images', "slide2.$extension");
            Confing::atualizar('slide2',$path);
        }
        
        if ($request->hasFile('slide3')) 
        {
            $extension = $request->slide3->extension();
            $path = $request->slide3->storeAs('public/images', "slide3.$extension");
            Confing::atualizar('slide3',$path);
        }

        return redirect()->back();
        
    }

    

}