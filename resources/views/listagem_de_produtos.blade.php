	@extends('layout.base')
	
	@section('conteudo')


<h1>Listagem de produtos</h1>

<h3><a href="/produtos_cadastrar/{{$p->id}}">Cadastrar novo produto</a></h3>

<h3><a href="">Produtos</a></h3>


@foreach($produtos as $p)
	<p> {{$p->nome}} <a href="/produtos_cadastrar/{{$p->id}}">CADASTRAR</a> | <a href="/categorias_produtos_editar/{{$p->id}}">EDITAR</a> | <a href="/categorias_produtos_remover/{{$p->id}}">REMOVER</a></p>


	
@endforeach

@endsection
