@extends('layout.base')
	
@section('conteudo')


<h3>Cadastrar um novo produto</h3>


@if(empty($produtos))
<form action = "/salvar_produtos" method = "post" enctype="multipart/form-data">
@else
<form action="/autalizar_produtos/{{$produtos->id}}" method="post">
@endif



@csrf


@if(empty($produtos))
<p>Nome: <input type="text" name="nome" /></p>
<p>Descrição: <input type="text" name="descricao" /></p>
<p>Valor: <input type="text" name="valor" /></p>
<p>Unidade: <input type="text" name="unidade" /></p>

@if(!empty($produto))
<p> <img src = "/storage/{{$produto->imagem}}" alt = "imagem do produto"/> </p>
@endif
<p>Imagem: <input type="file" name "imagem"> </p>

@foreach($categorias as $c)
<p><input type="radio" name="categoria" value="{{$c->id}}">{{$c->nome}}</p>
@endforeach
<input type="submit" value="Enviar" />

@else
<p>Nome: <input type="text" name="nome" value="$produtos->nome" /></p>
<p>Descrição: <input type="text" name="descricao" value="$produtos->descricao" /></p>
<p>Valor: <input type="text" name="valor" value="$produtos->valor" /></p>
<p>Unidade: <input type="text" name="unidade" value="$produtos->unidade" /></p>
@endif







</form>



@endsection