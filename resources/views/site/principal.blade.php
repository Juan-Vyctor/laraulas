@extends('site.layouts.basico') {{-- tá puxando código do lugar referido ai --}}

@section('titulo', 'Veja') {{-- como não é algo simples, dá pra fazer numa linha só--}}
{{-- dá pra usar variável e o caralho a 4 também --}}

@section('body') {{-- divide a página em bloquinhos, e encaixa no template --}}
    <h1>omg madoka hii!!</h1>

    <ul>
        <li>
            <a href="{{ route('site.index') }}">Be Meguca</a>
        </li>
        <li>
            <a href="{{ route('site.sobre') }}">Bout Meguca</a>
        </li>
        <li>
            <a href="{{ route('site.compre') }}">Buy Meguca</a>
        </li>
        <li>
            <a href="{{ route('site.contato') }}">Message Meguca</a>
        </li>
    </ul>
@endsection