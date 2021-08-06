<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Confing extends Model
{
    protected $table='config';
    public $timestamps = false;
    protected $fillable = ['valor', 'chave'];

    public static function get($chave){
        $config=self::where('chave',$chave)->first();
        if ($config){
            return $config->valor;
        }
        else{
            return '';
        }
        // return self::where('chave',$chave)->first()->valor;
        
    }

    public static function atualizar($chave,$valor){

        $up=self::where('chave',$chave)->first();
        // dd($up);
        
        if (!$up)
        {
            self::create(['chave'=>$chave,'valor'=>$valor]);
        }
        else{
        
        // $up->update(['valor'=>$valor]);

        $up->valor=$valor;
        $up->update();
        }

       
        return true;

    }

}
