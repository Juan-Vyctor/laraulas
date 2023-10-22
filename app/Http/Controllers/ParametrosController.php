<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    public function parametro(string $nome, int $idade = 0) {
        // primeiro modo volta as variáveis como array, é o que Fomelixo usa
        //return view('site.teste', ['nome'=>$nome, 'idade'=>$idade]);

        // compact faz exatamente a mesma coisa, na página vai chegar com o mesmo nome da variável
        return view('site.teste', compact('nome', 'idade'));

        // with() é meio broxa
        // return view('site.teste')->with('nome', $nome)->with('idade', $idade);
        // tem que ficar fazendo vários se forem várias variáveis
    }
}
