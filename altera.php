<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Atualizar Usuário(a)</title>
	<style type="text/css">
		fieldset{
			margin: auto;
			width: 350px;
		}
		.txt{
			padding:8px;
			width: 200px;
		}
		#login{
			margin-left: 42px 
		}
		#botao{
			padding: 7px;
			border-radius: 2px;
		}
	</style>
</head>
<body>
	<fieldset>
		<form action="atualizar.php" method="post">
			<label>Login:<input type="text" name="login" id="login" placeholder="informe o login de usuário(a)" class="txt" /></label><br/><br/>
			<label>Novo Login:&nbsp;<input type="text" name="novo_login" placeholder="informe o novo login de usuário(a)" class="txt" /></label><br/><br/>
			<input type="submit" value="Atualizar" id="botao" />
		</form>
	</fieldset>
</body>
</html>