@extends('layout.base')

@section('conteudo')

<h1>Página de Usuário</h1>


<p>Meus Produtos</p>
<p>Meus Pedidos</p>

@if(Auth::user()->perfil_usuario->id != 1)
<p><a href="perfis_usuarios">Configurar Perfis de Usuário</a></p>
<p><a href="categoria_produtos">Configurar Categoria de Produtos</a></p>
@endif

@endsection
