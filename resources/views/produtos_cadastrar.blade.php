@extends('layout.base')
	
@section('conteudo')


<h3>Cadastrar um novo produto</h3>

<form action = "/salvar_produtos" method = "post">

@csrf

<p>Nome: <input type="text" name="nome" /></p>


<p>Descrição: <input type="text" name="descricao" /></p>


<p>Valor: <input type="text" name="valor" /></p>


<p>Unidade: <input type="text" name="unidade" /></p>


<input type="submit" value="Enviar" />

</form>



@endsection