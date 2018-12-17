@extends('layout.base')
	
@section('conteudo')





@if(empty($produtos))
<h3>Cadastrar um novo produto</h3>
<form action = "/salvar_produtos" method = "post" enctype="multipart/form-data">
@else
<h3>Editar informações</h3>
<form action="/autalizar_produtos/{{$produtos->id}}" method="post" enctype="multipart/form-data">
@endif



@csrf

<p>Nome: <input type="text" name="nome" value="{{empty($produtos) ? '' : $produtos->nome }}" /></p>
<p>Descrição: <input type="text" name="descricao" value="{{empty($produtos) ? '' : $produtos->descricao }}" /></p>
<p>Valor: <input type="text" name="valor" value="{{empty($produtos) ? '' : $produtos->Valor }}"/></p>
<p>Unidade: <input type="text" name="unidade" value="{{empty($produtos) ? '' : $produtos->unidade }}"/></p>

@if(!empty($produtos))
<p><img src="/storage/{{$produtos->imagem}}" alt="foto do produto" ></p>

@endif


@if(!empty($produto))
<p> <img src = "/storage/{{$produto->imagem}}" alt = "imagem do produto"/> </p>
@endif
<p>Imagem: <input type="file" name = "imagem"> </p>


@foreach($categorias as $c)
<p><input type="radio" name="categoria" value="{{$c->id}}"

@if(!empty($produtos) && ($c->id == $produtos->categoria_produto_id))
checked
@endif
>{{$c->nome}}</p>
@endforeach

<input type="submit" value="Enviar" />

</form>



@endsection