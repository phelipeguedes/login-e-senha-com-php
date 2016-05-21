<?php 
	
	include("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$query = "SELECT *FROM usuario WHERE login = '$login' AND senha = '$senha'";

	$result = mysqli_query($conexao, $query) or die("Algo errado ocerreu!");
	$rows = mysqli_num_rows($result);

	if($rows > 0){
		header("Location: painel.php");
	}else{
		echo "<script>alert('Usuário ou senha incorretos!');</script>";
		header("Location: login.php");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="login.php"><input type="button" value="Home" /></a>
 </body>
 </html>