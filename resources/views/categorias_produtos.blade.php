	@extends('layout.base')
	
	@section('conteudo')

<h1>Categorias de Produtos</h1>

<h3><a href="/categorias_produtos_cadastrar">Cadastrar uma nova Categoria</a></h3>

@foreach($categorias as $c)
	<p> {{$c->nome}} | <a href="/categorias_produtos_editar/{{$c->id}}">EDITAR</a> | <a href="/categorias_produtos_remover/{{$c->id}}">REMOVER</a></p>
@endforeach

@endsection
	