
@extends ('layout.base')
@section('conteudo')
			
				
	<div class="container" id="container">
	
	<div class="row p1">
	<div class="col-md-12">
	
		<h2 style="text-align: center; font-family: Arial; color: #1C1C1C" class="p3">Quem somos!</h2>
	
	</div>
	</div>
	
	
	<div class="row">
	<div class="col-md-3">
	<img src="images/header.jpg" class="img-circle img-responsive" alt="log do site" width="" height="">

	
	
	</div>
	
	
	<div class="col-md-9">
	 <p class="p4 paragrafos">  texto texto texto texto 
	 texto texto texto texto texto texto 
	 texto texto  texto texto  texto texto  
	 texto texto  texto texto texto texto texto 
	 texto texto texto texto 
	 texto texto texto texto texto texto 
	 texto texto  texto texto  texto texto  
	 texto texto  texto texto texto texto texto 
	 texto texto texto texto texto texto. 
	 </p>

		</div>
	</div>
	</div>
	
	
		<div class="container" style="padding-bottom: 30px; margin-top: 30px;">
				<div class="row">
				
				<div class="col-md-12">
				
				<h2 style="text-align: center; font-family: Arial; color: #1C1C1C" class="p3">Mande-nos uma mensagem</h2>	
				 <p class="p4 paragrafos" style="text-align: center;">Qualquer dúvida, sugestão ou problema com relção ao site, mande-nos uma mensagem.</p>
				
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
							<input id="nome1" class="form-control" placeholder="Seu nome" type="text">
						</div>
						
						<div class="form-group">
							<label for="name" class="sr-only">Assunto</label>
							<input id="assunto" class="form-control" placeholder="Assunto da mensagem" type="text">
						</div>
	
						<div class="form-group ">
							<label for="message" class="sr-only">Conteúdo da mensagem</label>
							<textarea name="" id="mensagem1" cols="30" rows="5" class="form-control" placeholder="conteúdo da mensagem"></textarea>
						</div>
						
						<div class="form-group" style="text-align: center;">
							<input class="btn btn-primary" value="Enviar mensagem" type="submit">
						</div>
						</form>
						</div>
						
					
				</div>
				</div>
			</div>
						
		
	

</div>


@endsection