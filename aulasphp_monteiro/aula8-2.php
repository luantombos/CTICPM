<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Página de respostas</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$nome = $_POST['txtnome'];
			$senha = $_POST['txtsenha'];
			$curso = $_POST['optcurso'];
			$servico = $_POST['optservicos'];
			$cursonovo = $_POST['selcurso'];
			$sugestao = $_POST['txtsugestao'];
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			echo "	<table border=1 width=100% height=100%>
						<tr>
							<th>Nome</th>
							<th>Senha</th>
							<th>Curso</th>
							<th>Servico</th>
							<th>Curso Novo</th>
							<th>Sugestao</th>
						</tr>
						<tr align=center>
							<td>".$nome."</td>
							<td>".$senha."</td>
							<td>".$curso."</td>
							<td>".$servico."</td>
							<td>".$cursonovo."</td>
							<td>".$sugestao."</td>
					</table>";
			
			echo "<font size=4><b>"."Seu nome é: "."</font></b>".$nome."<p>";
			echo "<font size=4><b>"."Sua senha é: "."</font></b>".$senha."<p>";
			echo "<font size=4><b>"."Seu curso escolhido foi: "."</font></b>".$curso."<p>";
			echo "<font size=4><b>"."Seu serviço utilizado foi: "."</font></b>".$servico."<p>";
			echo "<font size=4><b>"."O curso que deseja fazer é: "."</font></b>".$cursonovo."<p>";
			echo "<font size=4><b>"."Sugestão enviada: "."</font></b>".$sugestao."<p>";
			
			//Fim Código
		
		?>
	
	</body>

</html>