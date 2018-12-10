@extends('layout.base')
	
	@section('conteudo')

<h1>Cadastro de Perfis de Usuários </h1>

<h3><a href="/perfis_usuarios_cadastrar">Cadastrar um novo perfil de usuário</a></h3>

@foreach($perfil as $p)

<p> {{$p->nome}} | <a href="/editar_perfis/{{$p->id}}">EDITAR</a> | <a href="/remover_perfis/{{$p->id}}">REMOVER</a> </p>

@endforeach
	

@endsection
	