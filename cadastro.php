<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cadastrar Usuário</title>
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
		<form action="salvar.php" method="post">
			<label>Login:&nbsp;&nbsp;<input type="text" name="login" placeholder="informe o nome de usuário" class="txt" /></label><br/><br/>
			<label>Senha:&nbsp;&nbsp;<input type="password" name="senha" placeholder="informe uma senha" class="txt" /></label><br/><br/>
			<input type="submit" value="Cadastrar" id="botao" />
		</form>
	</fieldset>
</body>
</html>