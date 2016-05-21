<?php 

	include("conexao.php");

	$login = $_POST['login'];

	$query = "SELECT *FROM usuario WHERE login like '%".$login."%' ";

	$result = mysqli_query($conexao, $query) or die("Vixe Cumpadi!!!");

 ?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Resultado da Busca</title>
</head>
<body>

	 <table>
	 	<tr>
	 		<th>Login de Usuário</th>
	 	</tr>

	<?php 

		while ($linha = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?= $linha['login'] ?></td>
			</tr>

	 <?php 

	 	}

	 	mysqli_close($conexao);
	  ?>

	 </table>
</body>
</html>