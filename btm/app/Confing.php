<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Confing extends Model
{
    protected $table='config';
    public $timestamps = false;

    public static function get($chave){
        
        return self::where('chave',$chave)->first()->valor;
        
    }

    public static function atualizar($chave,$valor){

        $up=self::where('chave',$chave)->first();
        // $up->update(['valor'=>$valor]);

        $up->valor=$valor;
        $up->update();
        
        return true;

    }

}
