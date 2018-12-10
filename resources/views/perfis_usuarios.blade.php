@extends('layout.base')
	
	@section('conteudo')

<h1>Cadastro de Perfis de Usuários </h1>

<h3><a href="/perfis_usuarios_cadastrar">Cadastrar um novo perfil de usuário</a></h3>

@foreach($perfil as $p)

<p> {{$p->nome}} | EDITAR | REMOVER</p>

@endforeach
	

@endsection
	