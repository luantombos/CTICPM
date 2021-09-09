<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Resultado exercícios</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$nome = $_POST['txtnome'];
			$sobrenome = $_POST['txtsobrenome'];
			$grad = $_POST['optgrad'];
			$inclusao = $_POST['dtinclusao'];
			$unidade = $_POST['selunidade'];
			$sugestao = $_POST['txtsugestao'];
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
						echo "	<table border=1 width=100% height=100%>
						<tr>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>Graduação/Patente</th>
							<th>Servico</th>
							<th>Curso Novo</th>
							<th>Sugestao</th>
						</tr>
						<tr align=center>
							<td>".$nome."</td>
							<td>".$sobrenome."</td>
							<td>".$grad."</td>
							<td>".$inclusao."</td>
							<td>".$unidade."</td>
							<td>".$sugestao."</td>
					</table>";
			
			//Fim Código
		
		?>
	
	</body>

</html>