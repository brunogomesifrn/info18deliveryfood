<!Doctype html>

<html>

<head>
<title> delivery food </title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!--<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />-->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	

	
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/est.css')}}">

	<link href="{{asset('css/login.css')}}" rel="stylesheet">
	
	<link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
	
	<link href="{{asset('css/bootstrap1.css')}}" rel="stylesheet">
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
    background-color: #CD950C; /* cor da página que está visitando */
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
}
  
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
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

/* The Modal (background) */
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

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
	height: 60%;
}

/* The Close Button (x) */
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
			


	<!--CABEÇALHO -->
	<div class="container">

	<div class="row" style="padding-top: 0px">
	<div class="col-md-3 paragrafos1">

	<p>&#9993; deliveryfood.com.br  &#9743; (84) 9999-9999 </p>

	</div>
	</div>
	
	<div class="col-md-7" style="text-align: right">

 		@guest
       <!--<a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="paragrafos1"> LOGIN</a>-->
       <a href="/autenticacao"><h1 style="width:auto;" class="paragrafos1"> LOGIN </h1></a>
       @endguest

      	@auth
       <a href="/desconectar"><h1 style="width:auto;" class="paragrafos1"> LOGOUT </h1></a>
       @endauth

	 
	
	</div>
	

	


	<div class="container" style="">
	
	<div class="row" style="">
	<div class="col-md-12">
	<div id="myCarousel" class="carousel slide" style="padding-bottom: 0px;">
	 
    <div class="carousel-inner">
      <div class="item active"> 
	  
	  <img src="images/foto5.jpg" alt="">
	  
        <div class="carousel-caption" style="padding: 100px;">
         
		<h1 class="p6 fon2" style="font-family: verdana;  font-size: 35px;"> Cadastre-se no site e divulgue seus pratos! </h1>
		 
          </div>
      </div>
	  
      <div class="item"> 
	  <img src="images/foto6.jpg" alt="">
	  
        <div class="carousel-caption" style="padding: 100px;">
          
		  <h1 class="p6 fon2" style="font-family: verdana;  font-size: 35px;"> Compre delícias para qualquer ocasião! </h1>
		  
          </div>
      
	  
	  </div>
	  
	   <div class="item"> 
	  <img src="images/foto5.jpg" alt="">
	  
        <div class="carousel-caption" style="padding: 100px;">
          
		  <h1 class="p6 fon2" style="font-family: verdana; font-size: 35px;"> Pesquise preços antes de comprar. Faça um orçamento! </h1>
		  
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
					  
					  
					
					  <a href="/" class="active">Início</a>
					  <a href="/comidas">Buscar produtos</a>
					  <a href="/somos" class="">Quem somos</a>
					  <a href="/cadastro">Cadastrar-se</a>
					   <a href="/orcamento">Orçamento</a>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
						</a>
					  
			</div>
					
			</div>
			</div>
			</div>






				@yield('conteudo')











     <!-- Rodapé -->
	<div class="container" style="background-color: white; text-align: center; font-family: Arial; color: #1C1C1C">
			<div class="row">
				<div class="col-md-12">
					<p class="">&copy; Copyright 2018. <a>Delivery food.</a> By: <a href="">Aline Bispo</a>, <a href=""> Ana Karolina </a> e <a href=""> Simeone. </a>  </p>		
				</div>
				
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