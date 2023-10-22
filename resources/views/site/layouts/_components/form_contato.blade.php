{{$slot}}
<form action="{{route('site.contato')}}" method="post">
@csrf {{-- uma parada de segunraça obrigatória pra todo POST--}}
    <label for="nome">Digite seu nome</label>
    <input type="text" name="nome" id="nome">
    <br>
    <label for="mensagem">Digite sua mensagem</label>
    <input type="text" name="mensagem" id="mensagem">
    <br>
    <button>Enviar</button>
</form>