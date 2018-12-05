@extends('layout.base')

@section('conteudo')

<h1>Página de Usuário</h1>


<p>Meus Produtos</p>
<p>Meus Pedidos</p>

@if(Auth::user()->perfil->id != 1)
<p>Configurar Perfis de Usuário</p>
<p>Configurar Categoria de Produtos</p>
@endif

@endsection
