<?php

$us= $_POST['usuario'];
$sen= $_POST['senha'];

if ($us=="admin" && $sen=="123") {
	echo("Acesso liberado!");
} else {
	echo("Acesso negado!");
}


?>