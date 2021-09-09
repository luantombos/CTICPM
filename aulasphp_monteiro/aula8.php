<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title></title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>
	
		<form name="pesquisa" action="aula8-2.php" method="POST">
		
			<h1 align="center">Pesquisa de opnião Microlins</h1>
			
			Nome: <input type="text" name="txtnome" size=100 maxlength=80></input>
				<br>
			Senha: <input type="password" name="txtsenha" size=10 maxlength=6></input>
				<p>
			Qual é o seu curso?
				<br>
			<input type="radio" name="optcurso" value="Informática">Informática</input>
				<br>
			<input type="radio" name="optcurso" value="Robótica">Robótica</input>
				<br>
			<input type="radio" name="optcurso" value="Programação">Programação</input>
				<br>
			<input type="radio" name="optcurso" value="Inglês">Inglês</input>
				<p>
			Quais serviços da Microlins você utiliza?
				<br>
			<input type="checkbox" name="optservicos" value="Digitação">Digitação</input>
				<br>
			<input type="checkbox" name="optservicos" value="Palestras">Palestras</input>
				<br>
			<input type="checkbox" name="optservicos" value="Reforço">Reforço</input>
				<br>
			<input type="checkbox" name="optservicos" value="Monitoria">Monitoria</input>
				<p>
			Qual outro curso você gostaria de fazer?
				<br>
			<select name="selcurso">
				<option>Informática</option>
				<option>Robótica</option>
				<option>Designer Gráfico</option>
				<option>Web Designer</option>
				<option>Inglês</option>
				<option>Manutenção de celulares</option>
				<option>Montagem e Manutenção</option>
				<option>Programação</option>
			</select>
			
			<center>
			Digite aqui uma sugetsão:
				<p>
				<textarea name="txtsugestao" rows=10 cols=100></textarea>
				<br><br>
				<input type="submit" name="btnenviar" value="Enviar"></input>
				<input type="reset" name="btncancelar" value="Limpar Formulário"></input>
		</form>

	</body>

</html>