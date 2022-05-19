<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinarNumController extends Controller
{
    private static $min = 1;
    private static $max = 10000000000;

    public function main(Request $request) {
       $this->validate($request, [
            'numero' => 'required'
       ]); 

       self::adivinar($request->numero);
    }

    private static function adivinar($num) {
        $aux = self::obtenerMitad();
        
        if($num == $aux) return dd("El número que has introducido es el " . $aux);
        else if ($num < $aux) self::$max = $aux - 1;
        else self::$min = $aux + 1;

        self::adivinar($num);
    }

    private static function obtenerMitad() {
        return intval(floor((self::$max + self::$min) / 2));
    }
}
