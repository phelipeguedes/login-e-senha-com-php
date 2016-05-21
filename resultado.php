<?php 
	
	include ("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$query = "INSERT INTO usuario (login, senha) VALUES ('$login', '$senha')";

	$ok = mysqli_query($conexao, $query);

	if($ok){
		echo "Usuário(a) cadastrado(a) com sucesso!";
	}else{
		echo "Usuario(a) não cadastrado(a)";
	}

	mysqli_close($conexao);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>Resultado de cadastro</title>
 </head>
 <body>
 	<p><a href="cadastro-usuario.php"><input type="button" value="Voltar"/></a></p>
 </body>
 </html>