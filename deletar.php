<?php 
	
	include("conexao.php");

	$login = $_POST['login'];

	$query = "DELETE FROM usuario WHERE login = '$login' ";
	$result = mysqli_query($conexao, $query) or die("Erro!");

	if($result){
		echo "Usuário(a) deletado com sucesso!";
	}else{
		echo "O usuário não foi excluído!";
	}

	mysqli_close($conexao);

 ?>
