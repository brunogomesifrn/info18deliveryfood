<?php

$nome= $_POST['n'];
$cpf= $_POST['cpf'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$rua = $_POST['rua'];
$email = $_POST['email'];
$conemail = $_POST['conemail'];
$senha =  $_POST['sen'];
$usuario = $_POST['opcao'];



echo "<h2> Nome do usuário: </h2>" . "<p> $nome </p>";
echo "<h2> CPF: </h2>". "<p> $cpf </p>";
echo "<h2> CEP: </h2>". "<p> $cep </p>";
echo "<h2> Cidade: </h2>". "<p> $cidade </p>";
echo "<h2> estado: </h2>". "<p> $estado </p>";
echo "<h2> Rua: </h2>". "<p> $rua</p>";
echo "<h2> Email: </h2>". "<p> $email </p>";
echo "<h2> Email confirmado: </h2>". "<p> $conemail </p>";
echo "<h2> Senha do usuário: </h2>". "<p> $senha </p>";
echo "<h2> Ele(a) quer: </h2>". "<p> $nome </p>";






?>