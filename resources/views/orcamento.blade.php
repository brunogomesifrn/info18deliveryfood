

			@extends('layout.base')
			@section('conteudo')

				<div class="container" style="padding-bottom: 30px; margin-top: 30px;">
				<div class="row">
				
				<div class="col-md-12">
				
				
				
									
				<h2 class="p3" style="text-align: center; font-family: Arial; color: #1C1C1C">Você pode fazer uma pesquisa de preços antes de comprar!</h2>
				<p class="p4 to paragrafos" style="text-align: center; line-height: 1.5em; padding-top: 10px;">Preencha o formulário abaixo indicando quais produtos quer encomendar. Ao clicar 'enviar', receberá um email 
				com preços cobrados por cada confeiteiro cadastrado no site.</p>	
				
				</div>
				</div>
				</div>
			
			
			<div class="container">
			<div class="container" style="margin-left: 40px;">
			<div class="row">
				<div class="col-md-6" style="">
						
						
					
		
					
						<form>
						<div class="form-group">
							<label for="name" class="sr-only">Nome</label>
							<input id="name" class="form-control" placeholder="Nome" type="text">
						</div>
						
						<div class="form-group ">
							<label for="email" class="sr-only">Email</label>
							<input id="email" class="form-control" placeholder="Email" type="email">
						</div>
						
						<div class="form-group">
							<label for="date" class="sr-only">Data</label>
							<input id="date" class="form-control" placeholder="Data" type="text">
						</div>
						
						<div class="form-group ">
							<label for="cidade" class="sr-only">Cidade</label>
							<input id="ci" class="form-control" placeholder="Cidade" type="text">
						</div>
						
						<div class="form-group ">
							<label for="estado" class="sr-only">estado</label>
							<input id="est" class="form-control" placeholder="estado" type="text">
						</div>
	
						<div class="form-group ">
							<label for="message" class="sr-only">Encomenda</label>
							<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="produtos da encomenda"></textarea>
						</div>
						
						<div class="form-group" style="text-align: center;">
							<input class="btn btn-primary" value="Enviar" type="submit">
						</div>
						</form>
						</div>
						
					
				</div>
				</div>
			</div>


@endsection