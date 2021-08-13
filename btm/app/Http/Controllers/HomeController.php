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
        $logo1=Confing::get('logo1');
        $logo2=Confing::get('logo2');
        $logo3=Confing::get('logo3');
        $logo4=Confing::get('logo4');
        $logo5=Confing::get('logo5');
        $slide1=Confing::get('slide1');
        $slide2=Confing::get('slide2');
        $slide3=Confing::get('slide3');
        $slide4=Confing::get('slide4');
        $slide5=Confing::get('slide5');
        $slide6=Confing::get('slide6');
        $slide7=Confing::get('slide7');
        $slide8=Confing::get('slide8');
        $rodapeslide1=Confing::get('rodapeslide1');
        $rodapeslide2=Confing::get('rodapeslide2');
        $rodapeslide3=Confing::get('rodapeslide3');
        $rodapeslide4=Confing::get('rodapeslide4');
        $rodapeslide5=Confing::get('rodapeslide5');
        $rodapeslide6=Confing::get('rodapeslide6');
        $menu1=Confing::get('menu1');
        $menu2=Confing::get('menu2');
        $menu3=Confing::get('menu3');
        $menu4=Confing::get('menu4');
        $menu5=Confing::get('menu5');
        $associados1=Confing::get('associados1');
        $associados2=Confing::get('associados2');
        $associados3=Confing::get('associados3');
        $associados4=Confing::get('associados4');
        $associados5=Confing::get('associados5');
        $associados6=Confing::get('associados6');
        $associados7=Confing::get('associados7');
        $associados8=Confing::get('associados8');
        $associados9=Confing::get('associados9');
        $associados10=Confing::get('associados10');
        $associados11=Confing::get('associados11');
        $associados12=Confing::get('associados12');
        $associados13=Confing::get('associados13');
        $associados14=Confing::get('associados14');
        $receita1=Confing::get('receita1');
        $receita2=Confing::get('receita2');
        $receita3=Confing::get('receita3');
        $receita4=Confing::get('receita4');
        $receita5=Confing::get('receita5');
        $receita6=Confing::get('receita6');
        $receita7=Confing::get('receita7');
        $receita8=Confing::get('receita8');
        $receita9=Confing::get('receita9');
        $footer1=Confing::get('footer1');
        $footer2=Confing::get('footer2');
        $footer3=Confing::get('footer3');
        $footer4=Confing::get('footer4');
        $footer5=Confing::get('footer5');
        $footer6=Confing::get('footer6');
        $footer7=Confing::get('footer7');
        $footer8=Confing::get('footer8');
        $footer9=Confing::get('footer9');
        $footer10=Confing::get('footer10');
        $footer11=Confing::get('footer11');
        $footer12=Confing::get('footer12');
        $footer13=Confing::get('footer13');


        return view('home', [
        'telefone'=>$telefone,
        'whatsapp'=>$whatsapp,
        'instagram'=>$instagram,
        'email'=>$email,
        'facebook'=>$facebook,
        'boleto'=>$boleto,
        'logo1'=>$logo1,
        'logo2'=>$logo2,
        'logo3'=>$logo3,
        'logo4'=>$logo4,
        'logo5'=>$logo5,
        'slide1'=>$slide1,
        'slide2'=>$slide2,
        'slide3'=>$slide3,
        'slide4'=>$slide4,
        'slide5'=>$slide5,
        'slide6'=>$slide6,
        'slide7'=>$slide7,
        'slide8'=>$slide8,
        'rodapeslide1'=>$rodapeslide1,
        'rodapeslide2'=>$rodapeslide2,
        'rodapeslide3'=>$rodapeslide3,
        'rodapeslide4'=>$rodapeslide4,
        'rodapeslide5'=>$rodapeslide5,
        'rodapeslide6'=>$rodapeslide6,
        'menu1'=>$menu1,
        'menu2'=>$menu2,
        'menu3'=>$menu3,
        'menu4'=>$menu4,
        'menu5'=>$menu5,
        'associados1'=>$associados1,
        'associados2'=>$associados2,
        'associados3'=>$associados3,
        'associados4'=>$associados4,
        'associados5'=>$associados5,
        'associados6'=>$associados6,
        'associados7'=>$associados7,
        'associados8'=>$associados8,
        'associados9'=>$associados9,
        'associados10'=>$associados10,
        'associados11'=>$associados11,
        'associados12'=>$associados12,
        'associados13'=>$associados13,
        'associados14'=>$associados14,
        'receita1'=>$receita1,
        'receita2'=>$receita2,
        'receita3'=>$receita3,
        'receita4'=>$receita4,
        'receita5'=>$receita5,
        'receita6'=>$receita6,
        'receita7'=>$receita7,
        'receita8'=>$receita8,
        'receita9'=>$receita9,
        'footer1'=>$footer1,
        'footer2'=>$footer2,
        'footer3'=>$footer3,
        'footer4'=>$footer4,
        'footer5'=>$footer5,
        'footer6'=>$footer6,
        'footer7'=>$footer7,
        'footer8'=>$footer8,
        'footer9'=>$footer9,
        'footer10'=>$footer10,
        'footer11'=>$footer11,
        'footer12'=>$footer12,
        'footer13'=>$footer13

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
        
        return redirect()->back();
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

        Confing::atualizar('slide4',$request->slide4);
        Confing::atualizar('slide5',$request->slide5);
        Confing::atualizar('slide6',$request->slide6);
        Confing::atualizar('slide7',$request->slide7);
        Confing::atualizar('slide8',$request->slide8);

        return redirect()->back();
        
    }

    public function logo(Request $request)
    {
        // dd($request);
        if ($request->hasFile('logo1')) 
        {
            $extension = $request->logo1->extension();
            $path = $request->logo1->storeAs('public/images', "logo1.$extension");
            Confing::atualizar('logo1',$path);
        }

        Confing::atualizar('logo2',$request->logo2);
        Confing::atualizar('logo3',$request->logo3);
        Confing::atualizar('logo4',$request->logo4);    
        Confing::atualizar('logo5',$request->logo5);


        return redirect()->back();

    }

    public function rodapeslide(Request $request)
    {
        // dd($request);
        if ($request->hasFile('rodapeslide1')) 
        {
            $extension = $request->rodapeslide1->extension();
            $path = $request->rodapeslide1->storeAs('public/images', "rodapeslide1.$extension");
            Confing::atualizar('rodapeslide1',$path);
        }

        if ($request->hasFile('rodapeslide2')) 
        {
            $extension = $request->rodapeslide2->extension();
            $path = $request->rodapeslide2->storeAs('public/images', "rodapeslide2.$extension");
            Confing::atualizar('rodapeslide2',$path);
        }

        if ($request->hasFile('rodapeslide3')) 
        {
            $extension = $request->rodapeslide3->extension();
            $path = $request->rodapeslide3->storeAs('public/images', "rodapeslide3.$extension");
            Confing::atualizar('rodapeslide3',$path);
        }

        Confing::atualizar('rodapeslide4',$request->rodapeslide4);
        Confing::atualizar('rodapeslide5',$request->rodapeslide5);
        Confing::atualizar('rodapeslide6',$request->rodapeslide6);


        return redirect()->back();

    }

    public function menu(Request $request)
    {
        // dd($request);
        if ($request->hasFile('menu1')) 
        {
            $extension = $request->menu1->extension();
            $path = $request->menu1->storeAs('public/images', "menu1.$extension");
            Confing::atualizar('menu1',$path);
        }

        Confing::atualizar('menu2',$request->menu2);
        Confing::atualizar('menu3',$request->menu3);
        Confing::atualizar('menu4',$request->menu4);
        Confing::atualizar('menu5',$request->menu5);


        return redirect()->back();

    }

    public function associados(Request $request)
    {
        // dd($request);
        if ($request->hasFile('associados1')) 
        {
            $extension = $request->associados1->extension();
            $path = $request->associados1->storeAs('public/images', "associados1.$extension");
            Confing::atualizar('associados1',$path);
        }

        if ($request->hasFile('associados2')) 
        {
            $extension = $request->associados2->extension();
            $path = $request->associados2->storeAs('public/images', "associados2.$extension");
            Confing::atualizar('associados2',$path);
        }

        if ($request->hasFile('associados3')) 
        {
            $extension = $request->associados3->extension();
            $path = $request->associados3->storeAs('public/images', "associados3.$extension");
            Confing::atualizar('associados3',$path);
        }


        if ($request->hasFile('associados4')) 
        {
            $extension = $request->associados4->extension();
            $path = $request->associados4->storeAs('public/images', "associados4.$extension");
            Confing::atualizar('associados4',$path);
        }


        if ($request->hasFile('associados5')) 
        {
            $extension = $request->associados5->extension();
            $path = $request->associados5->storeAs('public/images', "associados5.$extension");
            Confing::atualizar('associados5',$path);
        }

        if ($request->hasFile('associados6')) 
        {
            $extension = $request->associados6->extension();
            $path = $request->associados6->storeAs('public/images', "associados6.$extension");
            Confing::atualizar('associados6',$path);
        }

        if ($request->hasFile('associados7')) 
        {
            $extension = $request->associados7->extension();
            $path = $request->associados7->storeAs('public/images', "associados7.$extension");
            Confing::atualizar('associados7',$path);
        }

        if ($request->hasFile('associados8')) 
        {
            $extension = $request->associados8->extension();
            $path = $request->associados8->storeAs('public/images', "associados8.$extension");
            Confing::atualizar('associados8',$path);
        }

        if ($request->hasFile('associados9')) 
        {
            $extension = $request->associados9->extension();
            $path = $request->associados9->storeAs('public/images', "associados9.$extension");
            Confing::atualizar('associados9',$path);
        }

        if ($request->hasFile('associados10')) 
        {
            $extension = $request->associados10->extension();
            $path = $request->associados10->storeAs('public/images', "associados10.$extension");
            Confing::atualizar('associados10',$path);
        }

        if ($request->hasFile('associados11')) 
        {
            $extension = $request->associados11->extension();
            $path = $request->associados11->storeAs('public/images', "associados11.$extension");
            Confing::atualizar('associados11',$path);
        }

        if ($request->hasFile('associados12')) 
        {
            $extension = $request->associados12->extension();
            $path = $request->associados12->storeAs('public/images', "associados10.$extension");
            Confing::atualizar('associados12',$path);
        }

        Confing::atualizar('associados13',$request->associados13);
        Confing::atualizar('associados14',$request->associados14);



        return redirect()->back();

    }

    public function receita(Request $request)
    {
        // dd($request);

        Confing::atualizar('receita1',$request->receita1);        
        Confing::atualizar('receita2',$request->receita2);
        Confing::atualizar('receita3',$request->receita3);
        Confing::atualizar('receita4',$request->receita4);
        Confing::atualizar('receita5',$request->receita5);
        Confing::atualizar('receita6',$request->receita6);
        Confing::atualizar('receita7',$request->receita7);
        Confing::atualizar('receita8',$request->receita8);

        if ($request->hasFile('receita9')) 
        {
            $extension = $request->receita9->extension();
            $path = $request->receita9->storeAs('public/images', "receita9.$extension");
            Confing::atualizar('receita9',$path);
        }

        return redirect()->back();

    }

    public function footer(Request $request)
    {
        // dd($request);

        Confing::atualizar('footer1',$request->footer1);        
        Confing::atualizar('footer2',$request->footer2);
        Confing::atualizar('footer3',$request->footer3);
        Confing::atualizar('footer4',$request->footer4);
        Confing::atualizar('footer5',$request->footer5);
        Confing::atualizar('footer6',$request->footer6);
        Confing::atualizar('footer7',$request->footer7);
        Confing::atualizar('footer8',$request->footer8);
        Confing::atualizar('footer9',$request->footer9);
        Confing::atualizar('footer10',$request->footer10);
        Confing::atualizar('footer11',$request->footer11);
        Confing::atualizar('footer12',$request->footer12);


        if ($request->hasFile('footer13')) 
        {
            $extension = $request->footer13->extension();
            $path = $request->footer13->storeAs('public/images', "footer13.$extension");
            Confing::atualizar('footer13',$path);
        }

        return redirect()->back();

    }

    

}