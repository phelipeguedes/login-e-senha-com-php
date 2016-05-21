<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Remover Usuário</title>
	<style type="text/css">
		fieldset{
			margin: auto;
			width: 300px;
		}
		.txt{
			padding:8px;
			width: 200px;
		}
		#botao{
			padding: 7px;
			border-radius: 2px;
		}
	</style>
</head>
<body>
	<fieldset>
		<form action="deletar.php" method="post">
			<label>Login:&nbsp;&nbsp;<input type="text" name="login" placeholder="informe o usuário a ser deletado" class="txt" /></label><br/><br/>
			<input type="submit" value="Deletar" id="botao" />
		</form>
	</fieldset>
</body>
</html>