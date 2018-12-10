@extends('layout.base')
	
@section('conteudo')



<h3>Cadastrar uma novo perfil de usuário</h3>


@if(empty($perfil))
<form action="/perfis_usuarios_salvar" method="post">
@else
<form action="/atualizar_perfis/{{$perfil->id}}" method="post">
@endif


	@csrf

@if(empty($perfil))
<p>Nome: <input type="text" name="nome_perfil" /></p>
<input type="submit" value="Enviar" />
@else
<p>Nome: <input type="text" name="nome_perfil" value="{{$perfil->nome}}"/></p>
<input type="submit" value="Salvar" />
@endif

</form>



@endsection