@extends('site.layouts.basico') {{-- tá puxando código do lugar referido ai --}}

@section('titulo', 'Compre') {{-- como não é algo simples, dá pra fazer numa linha só--}}
{{-- dá pra usar variável e o caralho a 4 também --}}

@section('body') {{-- divide a página em bloquinhos, e encaixa no template --}}
    <h1>COMPRE, COMPRE MADOKA IMEDIATAMENTE</h1>
    <a href="https://www.amazon.com.br/Puella-Magi-Madoka-Magica-Complete/dp/1975316274" target="_blank">omg madoka hii lemme buy ur manga</a>
    <br>
    <a href="{{ route('site.index') }}">Voltar</a>
    <br>
@endsection