<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Exercícios</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<form name="pesquisa" action="aula8-4.php" method="POST">
		
			<h1 align="center">Dados Policial Militar</h1>
			
			Nome: <input type="text" name="txtnome" size=100 maxlength=80></input>
				<br>
			Sobrenome: <input type="text" name="txtsobrenome" size=100 maxlength=80></input>
				<p>
			Qual é a sua graduação/patente?
				<br>
			<input type="radio" name="optgrad" value="Soldado">Soldado</input>
				<br>
			<input type="radio" name="optgrad" value="Cabo">Cabo</input>
				<br>
			<input type="radio" name="optgrad" value="3º SGT">3º SGT"></input>
				<br>
			<input type="radio" name="optgrad" value="2º SGT">2º SGT</input>
				<br>
			<input type="radio" name="optgrad" value="1º SGT">1º SGT</input>
				<br>
			<input type="radio" name="optgrad" value="Subtenente">Subtenente</input>
				<br>
			<input type="radio" name="optgrad" value="2º Tenente">2º Tenente</input>
				<br>
			<input type="radio" name="optgrad" value="1º Tenente">1º Tenente</input>
				<br>
			<input type="radio" name="optgrad" value="Capitão">Capitão</input>
				<br>
			<input type="radio" name="optgrad" value="Major">Major</input>
				<br>
			<input type="radio" name="optgrad" value="Tenente-Coronel">Tenente-Coronel</input>
				<br>
			<input type="radio" name="optgrad" value="Coronel">Coronel</input>
				<p>
				
			Qual sua data de inclusão?
				<br>
			<input type="date" name="dtinclusao" value="Data de Inclusão"></input>
				<p>
			Qual é sua unidade de lotação?
				<br>
			<select name="selunidade">
				<option>CETIC</option>
				<option>EMG</option>
				<option>AJG</option>
				<option>5º BPM</option>
				<option>BPTUR</option>
				<option>BOPE</option>
				<option>BPChoque</option>
				<option>CPROEIS</option>
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