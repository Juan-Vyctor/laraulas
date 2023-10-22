<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompreMadokaController extends Controller
{
    public function compre() {
        return view('site.compre');
    }
}
