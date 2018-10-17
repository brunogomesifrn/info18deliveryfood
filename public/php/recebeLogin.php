<?php

if ($_POST["usuario"]=="admin" && $_POST["senha"]=="123") {
	echo("Acesso liberado!");
} else {
	echo("Acesso negado!");
}


?>