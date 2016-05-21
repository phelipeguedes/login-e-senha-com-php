<?php 
	
	include ("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$query = "INSERT INTO usuario (login, senha) VALUES ('$login', '$senha')";

	$result = mysqli_query($conexao, $query);

	if($result){
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
 	<p><a href="cadastro.php"><input type="button" value="Voltar"/></a></p>
 </body>
 </html>