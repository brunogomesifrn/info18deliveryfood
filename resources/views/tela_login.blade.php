<!DOCTYPE html>

<html>
<head>
	<title> Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilo_tela_login.css')}}">
</head>

<body>
		<form action="{{asset('php/recebeLogin.blade.php')}}" method="post">
			<h2> LOGIN</h2>
			<input type="text" placeholder="&#128272; Usuario" name="usuario">
			<input type="password"  placeholder="&#128272; Senha" name="senha">
			<input type="submit" name ="btnLogin" value="entrar">


		</form>

</body>
</html>