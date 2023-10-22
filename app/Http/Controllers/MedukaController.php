<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedukaController extends Controller
{
    public function meduka() {
        $medukas = [
            0=>[
                'nome'=>'Goduka',
                'poder'=>'muito',
                'arma'=>'amor',
                'cor'=>'rosa'
            ],
            1=>[
                'nome'=>'Meduka',
                'poder'=>'pouco',
                'arma'=>'arco',
                'cor'=>'rosinha'
            ],
            2=>[
                'nome'=>'Meduka',
                'poder'=>'nenhum',
                'arma'=>'Hamiru',
                'cor'=>'nenhuma'
            ],
            3=>[
                'nome'=>'Morduka',
                'poder'=>'D:'
            ]
        ];

        /*
            Operador terciário (putaria também)
            isso é um IF inteiro de uma linha só, resumidamente
            
            condição ? se verdadeiro : se falso
            a condição sempre tem que ser de true ou false
        */
        // echo isset($medukas[1]['arma']) ? '<h1>existe arma</h1>' : '<h1>desexiste arma</h1>';

        return view('app.meduka.index', compact('medukas'));
        // return view('app.meduka.index');
    }
}
