<!Doctype html>

<html>

<head>
<title> delivery food </title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" href="css/animate.css"/>

	<link rel="stylesheet" href="css/bootstrap.css"/>
	
	<link rel="stylesheet" href="css/bootstrap1.css"/>	
	<link rel="stylesheet" href="est.css">

	<link rel="stylesheet" href="css/style.css"/>
	
	<link rel="shortcut icon" href="favicon.ico"/>
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	 <link rel="stylesheet" media="all" type="text/css" href="css/style-demo.css"/>
	 
	<link rel="stylesheet" href="css/flexslider.css">
	
		<link href="css1/login.css" rel="stylesheet">
	
	<link href="css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="est.css" rel="stylesheet"/>
    <script src="js/jquery.jcarousellite.js"></script>
	
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
    background-color: #CD950C; /* cor da p�gina que est� visitando */
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


	<div class="container">

	<div class="row" style="">
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
					  <a href="comidas.php" class="active">Buscar produtos</a>
					  <a href="somos.php" class="">Quem somos</a>
					  <a href="cadastro.html">Cadastrar-se</a>
					   <a href="orcamento.php">Orçamento</a>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
						</a>
					  
			</div>
					
			</div>
			</div>
			</div>


		<div class="container">
		
		<div class="row" style="padding-top: 40px; padding-bottom: 40px;">
		
		<div class="col-md-12">
		
		
		<h2 style="text-align: center; font-family: Arial; color: #1C1C1C" class="p3">Encontre delícias para qualquer ocasião!</h2>
		
		</div>
		</div>
		
		<div class="row" style="padding-bottom: 30px; padding-top: 20px; padding-left: 10px; margin-right: 70px; margin-left: 50px;">
		
		
		<div class="col-md-12" style="text-align: right">
		<form action=" " method="post">
		
		<label for="busca" class="p3 paragrafos">Buscar produtos pelo CEP:</label>
		
		 <p><input type="text" value=""  onfocus="this.value=(this.value=='Busque produtos da sua cidade;')? '' : this.value ;" name="cep" />
		
		<button type="submit" style="font-family: arial">OK</button></p>
		</form>
		
		</div>
		</div>
		</div>
		
		
		<div class="container">
		<div class="row" style="padding-top: 15px;">
		
		<p style="text-align: left; position: top; padding-left: 10px; font-family: verdana;" class="p4"> Doces </p>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem" > </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		
		</div>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		

		
		</div>
		
		
		<div class="row" style="margin-top: 45px;">
		
		<p style="text-align: left; position: top; padding-left: 10px; font-family: verdana;" class="p4"> Doces finos </p>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem" > </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		
		</div>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		

		
		</div>
		
		
		<div class="row" style="margin-top: 45px;">
		
		<p style="text-align: left; position: top; padding-left: 10px; font-family: verdana;" class="p4"> Bolos </p>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem" > </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		
		</div>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		

		
		</div>
		
		
			<div class="row" style="margin-top: 45px;">
		
		<p style="text-align: left; position: top; padding-left: 10px; font-family: verdana;" class="p4"> Salgados </p>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem" > </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		
		</div>
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
 									 </div>
		</div>
		
		
		<div class="col-md-3">
		<div class="thumbnail" width="90px"> 
									 <img src="images/6.jpg" class="img-rounded" alt="Paisagem"> </div>
									 <div class="caption  paragrafos">
									  bbbbbbbbbbbbbbbbb
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
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<script>
$('.carousel').carousel({
  interval: 5000
})
</script>


	<script src="js/jquery.min.js"></script>
	
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