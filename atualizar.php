<?php 

	include("conexao.php");

	$login = $_POST['login'];
	$novo_login = $_POST['novo_login'];

	$query = "UPDATE usuario SET login = '$novo_login' WHERE login = '$login'";

	$result = mysqli_query($conexao, $query) or die("Errou!");

	if($result){
		echo "<script>alert('Usuário(a) alterado com sucesso!')</script>";
	}else{
		echo "<script>alert('Algo errado ocorreu. O usuário(a) não foi alterado!')</script>";
	}

	mysqli_close($conexao);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>Alterar Usuário(a)</title>
 </head>
 <body>
 	<a href="login.php"><input type="button" value="Home" /></a>
 </body>
 </html>