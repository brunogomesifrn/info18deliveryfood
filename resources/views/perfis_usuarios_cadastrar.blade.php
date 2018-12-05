@extends('layout.base')
	
@section('conteudo')
<h3>Cadastrar uma novo perfil de usuário</h3>
<form action="/perfis_usuarios_salvar" method="post">
	@csrf
<p>Nome: <input type="text" name="nome_perfil" /></p>
<input type="submit" value="Enviar" />

</form>



@endsection