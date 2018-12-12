	@extends('layout.base')
	
	@section('conteudo')


<h1>Listagem de produtos</h1>

<h3><a href="/produtos_cadastrar">Cadastrar novo produto</a></h3>

<h3>Produtos</h3>

@foreach($produtos as $p)
	<p> {{$p->nome}} | <a href="/editar_produtos/{{$p->id}}">EDITAR</a> | <a href="remover_produtos/{{$p->id}}">REMOVER</a></p>

	
@endforeach

@endsection
