<!doctype html>


<html>

<head>
<title> delivery food </title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/bootstrap1.css">

	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/est.css">
	
	<link href="css1/login.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/stilo.css">
	
	<link rel="stylesheet" href="est.css">
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	
	<style type="text/css">
	
.topnav {
    background-color: #FFC125; /* cor do menu completo */
    overflow: hidden;

}



/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #1C1C1C; /* cor da fonte */
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 15px;
	font-family: 'Verdana', "COURIER", arial;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #FFB90F; /* cor conforme passar o mouse */
    color: white;
}

/* Add an active class to highlight the current page */
.active {
    background-color: #CD950C; /* cor da p?na que est?isitando */
    color: #1C1C1C;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.sticky {
  position: fixed;
  top: 0;
  width: 86%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 102px;
}
		
	.paragrafos{
		
		font-family: Arial, Verdana;
		font-size: 18px;
		color: #1C1C1C;
	}
	
	.paragrafos1{
		
		font-family: Arial, Verdana;
		font-size: 15px;
		color: #1C1C1C;
	}
	
	.plis{

padding: 16px

}
/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

span.psw {
    float: right;
    padding-top: 16px;
}


.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
	height: 60%;
}


.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: black;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    
}
		
</style>
		
		
		<script>
		
 function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
	

</script>
</head>


<body>

<div class="container">

	<div class="row" style="padding-top: px">
	<div class="col-md-2 paragrafos1">

		&#9993; deliveryfood.com.br 

	</div>
	
	<div class="col-md-3 paragrafos1" style="margin-left: 0px;">

	    &#9743; (84) 9999-9999
	
	</div>
	
	<div class="col-md-7" style="text-align: right">

	 <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="paragrafos1"> LOGIN</a>
	
	</div>
	
	</div>
	
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="php/recebeLogin.php">
   
   <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
       <h1 style="text-align: center; font-family: Arial; padding-top: 25px; padding-bottom: 15px"> LOGIN </h1>
    </div>
    

    <div class="plis">
      <p><input type="text" placeholder="&#128272; usuário" name="uname" class="estilo" required></p>
      <p><input type="password" placeholder="&#128272; senha" class="estilo" name="psw" required> </p>  
      <button type="submit" class="botao">entrar</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


	<div class="container" style="">
	
	<div class="row" style="">
	
	<div class="col-md-12">
	
	<div id="myCarousel" class="carousel slide" style="padding-bottom: 0px;">
	 
    <div class="carousel-inner">
      <div class="item active"> 
	  
	  <img src="images/foto5.jpg" alt="">
	  
        <div class="carousel-caption" style="padding: 100px;">
         
		<h1 class="p6 fon2" style="font-family: verdana;  font-size: 35px;"> Cadastre-se no site e divulgue seus trabalhos! </h1>
		 
          </div>
      </div>
	  
      <div class="item"> 
	  <img src="images/foto6.jpg" alt="">
	  
        <div class="carousel-caption" style="padding: 100px;">
          
		  <h1 class="p6 fon2" style="font-family: verdana;  font-size: 35px;"> Compre delícias para qualquer ocasião!</h1>
		  
          </div>
      
	  
	  </div>
	  
	   <div class="item"> 
	  <img src="images/foto5.jpg" alt="">
	  
	  
        <div class="carousel-caption" style="padding: 100px;">
          
		  <h1 class="p6 fon2" style="font-family: verdana;  font-size: 35px;"> Pesquise preços antes de comprar. Faça um orçamento! </h1>
		  
          </div>
      
	  
	  </div>
	  
    </div>
 </div>
 
 </div>
 </div>
 </div>
	
		<div class="container" style="padding-bottom: 0px;">
		<div class="row">
		<div class="col-md-12">
		<div class="topnav" id="myTopnav">
					  
					  
					
					  <a href="inicio.php">Início</a>
					  <a href="comidas.php">Buscar produtos</a>
					  <a href="somos.php">Quem somos</a>
					  <a href="cadastro.html">Cadastrar-se</a>
					   <a href="orcamento.php" class="active">Orçamento</a>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
						</a>
					  
			</div>
					
			</div>
			</div>
			</div>


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

</div>



		<div class="container" style="background-color: white; text-align: center; font-family: Arial; color: #1C1C1C; margin-top: 100px">
			<div class="row">
				<div class="col-md-12">
					<p class="">&copy; Copyright 2018. <a>Delivery food.</a> By: <a href="">Aline Bispo</a>, <a href=""> Ana Karolina </a> e <a href=""> Simeone. </a>  </p>		
				</div>
				
			</div>
			
		</div>



<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>


<script>

$('.carousel').carousel({
  interval: 5000
})
</script>


	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/moment.js"></script>
	
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<script src="js/main.js"></script>

</body>
</html>