<?php

$nome= $_POST['n'];
$cpf= $_POST['cpf'];
$cep = $_POST['ce'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$rua = $_POST['rua'];
$email = $_POST['email'];
$conemail = $_POST['conemail'];
$senha =  $_POST['sen'];
$usuario = $_POST['opcao'];



echo "<b> Nome do usuário: </b>".  $nome . "<br/> <br/>";
echo "<b> CPF: </b>" . $cpf . "<br/><br/>" ;
echo "<b> CEP: </b>" . $cep . "<br/> <br/>";
echo "<b> Cidade: </b>" . $cidade . "<br/> <br/>";
echo "<b> estado: </b>" . $estado . "<br/> <br/> ";
echo "<b> Rua: </b>" . $rua . "<br/> <br/> ";
echo "<b> Email: </b>" . $email . "<br/> <br/>";
echo "<b> Email confirmado: </b>" . $conemail . "<br/> <br/>";
echo "<b> Senha do usuário: </b>" . $senha . "<br/> <br/>";


if($usuario == 1){
	
	
	
echo "<b> O usuário(a) quer: </b>" . "<b style= 'background-color: red'> vender produtos. </b>";

}else{
	
	echo "<b> O usuário(a) é: </b>" . "<b style= 'background-color: red; font-size: 25px'> um cliente. </b>";
}




?>