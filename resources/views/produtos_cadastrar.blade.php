@extends('layout.base')
	
@section('conteudo')



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

</form>



@endsection