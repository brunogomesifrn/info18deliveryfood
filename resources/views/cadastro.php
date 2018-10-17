<!Doctype html>

<html>

<head>

	<title> Criar conta </title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel= "stylesheet" href="css1/estilo.css"/>
<link href="css1/bootstrap.css" rel="stylesheet"/>


<script src= "c1/java.js"> </script>


</head>


<body class="">
	
		<!--<div id="fh5co-events" data-section="events" style="background-image: url(images/capa.jpg)" data-stellar-background-ratio="0.5">
			
			<div class="fh5co-overlay"></div>-->

	
	<div class="container p4 box" style="padding: 5px; background-color: white">
	
	
				<div class="col-md-6 p4" style="background-color:; margin-left: 270px;">
						
						<h3 class="p10" style="font-size: 50px; font-family: arial">  Delivery food  <br/> </h3>
						
						<p class="p10 p3">  Para vender ou comprar cadastre-se inserindo os dados abaixo: </p> <br/>
						
						<form action="php/cadastrando.php" method="post" name="formCadastro">
						
						<div class="form-group">
						
							<label for="name" class="sr-only"> Seu nome completo</label>
							<input name="n" class="form-control" placeholder="Nome completo" maxlength="100" required autofocus type="text">
							
						</div>
						
						<div class="form-group">
						
			<input name="cpf" id="numero" class="form-control" placeholder="CPF, apenas números" type="text" maxlength="11" onBlur="faz()" required />

							
						<p id="msgOK" style="color:orangeRed; display:none; text-align: left; font-family: arial; font-size: 15px">CPF Válido.</p>
						<p id="msgErro" style="color: orangeRed; display:none; text-align: left; font-family: arial; font-size: 15px">CPF inválido,
						por favor, digite outro!</p>
						
						</div>	
				
					<div class="form-group">
							<label for="cep" class="sr-only">CEP</label>
							<input name="ce" class="form-control" placeholder="CEP" type="text" maxlength="8" required>
							
							</div>
							
							
							
						<div class="form-group">
							<label for="endereco" class="sr-only">cidade</label>
							<input name="cidade" class="form-control" placeholder="Sua cidade" type="text" required>
						</div>
						
						
						<div class="form-group">
							<label for="endereco" class="sr-only">estado</label>
							<input name="estado" class="form-control" placeholder="Seu estado" type="text" required>
						</div>
						
						<div class="form-group">
							<label for="endereo" class="sr-only">Rua</label>
							<input name="rua" class="form-control" placeholder="Sua rua" type="text" required>
						</div>
						
					
						
						<div class="form-group ">
							<label for="email" class="sr-only">Seu email</label>
							<input name="email" class="form-control" placeholder="Email" id="m1" type="text" name="em" required>
						</div>
						
						<div class="form-group ">
							<label for="email" class="sr-only">Confirme seu email</label>
							<input name="conemail" class="form-control" placeholder="confirme seu email" id="m2" type="text" OnBlur="apg();" required>
						</div>
						
						<div class="form-group ">
							<label for="senha" class="sr-only">Sua senha</label>
							<input name="sen" class="form-control" placeholder="Sua senha" type="password" required>
						</div>
						
						
					<p class="texto" id="apagar"> 
						<input type= "radio" name="opcao" value="1" onclick= "inserir()"/> Quero vender      
							<input type= "radio" name="opcao" value= "2" onclick="apg()" checked /> Quero comprar</p>
							
					
						
						
						<div class="form-group" id="divTeste">  </div>


						<div class="form-group" id="divTeste1">  </div>

						
						<div class="form-group" id="divTeste2">  </div>

						
						
						<div class="form-group">
							<input class="btn btn-primary" value="Cadastrar-se" type="submit">
							<br/>
						</div>
						
							<a href="index.html"> <p class="cor"> voltar à página principal</p></a>
							<a href="tela_login.html"> <p class="cor"> Já tem uma conta?</p></a>
							
							
						
						</form>
						
					
						</div>
						
					
				
	
	
	
	</div>
	</div>

	
</body>

</html>