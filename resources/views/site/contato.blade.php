@extends('site.layouts.basico')
@section('titulo', 'Fale com')

@section('body')
<h1>MANDE, MANDE UMA MENSAGEM PARA MADOKA IMEDIATAMENTE</h1>
<br>
@component('site.layouts._components.form_contato')
<p>Form dos contatos:</p> {{-- vibe parecida com @yield, vai enviar alguma coisa e alterar lá --}}
@endcomponent {{-- é tipo... um mini include...?--}}
<br>
@endsection