@extends('site.layouts.basico') {{-- tá puxando código do lugar referido ai --}}

@section('titulo', 'Sobre') {{-- como é algo simples, dá pra fazer numa linha só--}}
{{-- dá pra usar variável e o caralho a 4 também --}}

@section('body') {{-- divide a página em bloquinhos, e encaixa no template --}}
    <h1>LEIA, LEIA SOBRE MADOKA IMEDIATAMENTE</h1>
    <a href="https://madoka.fandom.com/wiki/Madoka_Magica_Wiki" target="_blank">omg madoka hii lemme read bout you</a>
    <br>
    <a href="{{ route('site.index') }}">Voltar</a>
    <br>
@endsection