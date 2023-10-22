<h1>Meduka...</h1>
@include('site.layouts._partials.madoimg') {{-- include igual ao PHP normal, copia todo o HTML e cola--}}
<br>
{{-- isso aqui é comentário, especificamente do blade --}}

<p>TESTE TESTE @{{tenaofadgoain}}</p>
{{-- se você usa @ antes do @{{}} ai o blade coloca eles numa boa --}}

@php
    // fazer coisa direto em PHP base
    echo 'teste PHP';

    /*
        COISAS QUE O LARAFODASSE CONSIDERA EMPTY:
        ''
        0
        0.0
        '0'
        null
        false
        array() vazio
        $variavel setada mas sem valor nenhum
    */
@endphp

<hr>
@component('site.layouts._components.form_contato')
<p>Form aleatório só pra dizer que tem:</p> {{-- vibe parecida com @yield, vai enviar alguma coisa e alterar lá --}}
@endcomponent {{-- é tipo... um mini include...?--}}
<hr>


{{-- tem o @dd() que é tipo um vardump mas de array --}}

{{-- @isset() é a mesma vibe do PHP normal, se tiver setada vai dar bom --}}
{{-- daria erro se tentasse rodar uma variável que não existe, mas com isso é de boa --}}

@isset($medukas)

    {{-- sintaxe dos if em blade é assim --}}
    @if (count($medukas) > 0 && count($medukas) < 10)
        <h3>Rabu...</h3>
    @elseif(count($medukas) > 10)
        <h3>Rabu!!!</h3>
    @else
        <h3>Coobie T__T</h3>
    @endif
    <hr>

    {{-- @for my beloved... --}}
    {{-- tá literalmente só um for normal e que se foda, amém --}}
    @for ($i=0; $i<count($medukas); $i++) 

        <h3>Nome: {{$medukas[$i]['nome']}}</h3>
        <h3>Poder: {{$medukas[$i]['poder'] ?? 'pouco'}}</h3>
        <h3>Arma: {{$medukas[$i]['arma'] ?? ''}}</h3>
        <h3>Cor: {{$medukas[$i]['cor'] ?? ''}}</h3>

        {{-- esse ?? é pra setar um valor default, caso a variável seja null ou não definida --}}

        {{-- @unless é uma baixaria, resumindo, ele dá certo se der errado --}}
        @unless($medukas[$i]['poder'] == 'muito')
            <h3>Meduca fraca</h3>
        @else
            <h3>Meduca forte</h3>
        @endunless
        
        {{-- @switch, o clássico if só que pior... --}}
        @switch($medukas[$i]['cor'] ?? '')
            @case('rosa')
                <p>Pós time-skip</p>
                @break
        
            @case('rosinha')
                <p>Normal</p>
                @break
                
            @case('nenhuma')
                <p>Pobre</p>
                @break

            @default
                <p>All Medukas are beauty</p>
                @break
        @endswitch
        
        @php
        /* @isset() e @empty()
            @isset($medukas[1]['arma'])
                <h3>Arma: {{$medukas[1]['arma']}}

                {{-- reffer to linhas 10 a 20 --}}
                @empty($medukas[1]['arma'])
                    Meguca não tem armas >:(
                @endempty
            @endisset
        */
        @endphp

        <hr>
    @endfor

    @php $i=0; @endphp
    @while ((isset($medukas[$i])))
        <p>eu te amo Meduka</p>
        <br>
        @php $i++; @endphp
    @endwhile
    <hr>
    @foreach ($medukas as $indice=>$meduka)
    {{-- especificamente em @foreach, tem o objeto loop pra gente usar se quiser --}}
    {{-- ai usar um @dd() no loop é daora porque mostra tudo certinho --}}
    
        @if ($loop->first) {{--  $loop-first retorna true ou false dependendo se é a primeira--}}
            <p>primeiroooooooooooooo</p>
        @endif
        <p>Iteração atual: {{$loop->iteration}}</p>
        <p>{{$meduka['nome']}} ama Hameru</p>
        @if ($loop->last) {{-- tem $loop-last também, mesma vibe --}}
            <p>ultimooooooooooooooooooo</p>
            <p>Total de loops: {{$loop->count}}</p> {{-- auto explicativo... --}}
        @endif
        <br>
    @endforeach
    <hr>
    
    {{-- forelse é um foreach pá foda daora mas caso o array venha fudido tem o @empty pra prevenir --}}
    @php $coobies=[]; @endphp
    @forelse ($coobies as $indice=>$coobie)
    {{-- tá em em forelse também, mas enfim --}}
        <p>{{$coobie['nome']}} ama Hameru</p>
        <br>
    @empty
        <h1>No Coobies found :)</h1>
    @endforelse
@endisset