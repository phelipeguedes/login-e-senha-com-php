 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>Buscar Usuários</title>
 	<style type="text/css">
 		fieldset{
			margin: auto;
			width: 350px;
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
		<form action="pesquisar.php" method="post">
			<label>Palavra-chave:&nbsp;&nbsp;<input type="text" name="login" placeholder="informe o nome de usuário" class="txt" /></label><br/><br/>
			<input type="submit" value="Buscar" id="botao" />
		</form>
	</fieldset>
 </body>
 </html>