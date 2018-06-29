
function verificar(){
	var mail= document.getElementById('m1');
	var mail2= document.getElementById('m2');
	
	if(mail.length != mail2.length && mail == mail2){
		
		alert("Os emails digitados não são iguais, digite novamente.");
		document.getElementById('m2').innerHTML = '';
	}
	
	}
	
	
	function teste(){
		
		
		alert('Vamos!');
		
	}

	
	

function apg(){
	document.getElementById('divTeste').innerHTML = '';
	
	}