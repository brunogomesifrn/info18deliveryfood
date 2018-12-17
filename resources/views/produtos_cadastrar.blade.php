@extends('layout.base')
	
@section('conteudo')



<<<<<<< HEAD
@if(empty($produto))
<h3>Cadastrar um novo produto</h3>
<form action = "/salvar_produtos" method = "post" enctype="multipart/form-data">

@else
<h3>Editar produto</h3>
<form action = "/autalizar_produtos/{{$produto->id}}" method = "post" enctype="multipart/form-data">

@endif

@csrf

<p>Nome: <input type="text" name="nome" value = "{{empty($produto) ? '' : $produto->nome}}" /></p>


<p>Descrição: <input type="text" name="descricao" value = "{{empty($produto) ? '' : $produto->descricao}}" /></p>


<p>Valor: <input type="text" name="valor" value = "{{empty($produto) ? '' : $produto->valor}}" /></p>


<p>Unidade: <input type="text" name="unidade" value = "{{empty($produto) ? '' : $produto->unidade}}" /></p>

@if(!empty($produto))
<p> <img src="/storage/{{$produto->imagem}}" alt="imagem do produto"/> </p>

=======

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
>>>>>>> 84857b11c07814dc1d2d3f839ec67a50f04fdd64
@endif
<p>Imagem: <input type="file" name "imagem"> </p>

@foreach($categorias as $c)
<p><input type="radio" name="categoria" value="{{$c->id}}" 
	@if(!empty($produto) && ($c->id == $produto->categoria_produto_id))
	checked
	@endif 
	>{{$c->nome}}</p>

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