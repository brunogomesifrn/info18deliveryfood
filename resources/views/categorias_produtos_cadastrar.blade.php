@extends('layout.base')
	
@section('conteudo')
<h3>Cadastrar uma nova categoria de Produto</h3>
<form action="/categorias_produtos_salvar" method="post">
	@csrf
<p>Nome: <input type="text" name="nome" /></p>
<input type="submit" value="Enviar" />

</form>



@endsection