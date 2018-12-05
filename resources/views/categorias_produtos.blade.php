
	@extends('layout.base')
	
	@section('conteudo')

<h1>Categorias de Produtos</h1>

<h3><a href="/categorias_produtos_cadastrar">Cadastrar uma nova Categoria</a></h3>

@foreach($categorias as $c)

<p> {{$c->nome}} | EDITAR | REMOVER</p>

@endforeach
	
	@endsection
	