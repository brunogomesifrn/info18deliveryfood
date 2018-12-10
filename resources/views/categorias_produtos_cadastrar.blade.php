@extends('layout.base')
	
@section('conteudo')
<h3>Cadastrar uma nova categoria de Produto</h3>

@if(empty($categoria))
 <form action="/categorias_produtos_salvar" method="post">
@else
<form action="/categorias_produtos_atualizar/{{$categoria->id}}" method="post">
@endif


	@csrf



@if(empty($categoria))
<p>Nome: <input type="text" name="nome" /></p>
<input type="submit" value="Enviar" />
@else
<p>Nome: <input type="text" name="nome" value="{{$categoria->nome}}"/></p>
<input type="submit" value="Editar" />
@endif



</form>



@endsection