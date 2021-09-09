<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Cadastro de Cliente</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
			echo "<pre>";
			require 'revconexao.php';
			
			$titulo = $_POST['txttitulo'];
			$genero = $_POST['txtgenero'];
			$lancamento = $_POST['txtlancamento'];
			
			echo "O nome do filme é: ".$titulo."<br>";
			echo "O gênero do filme cadastrado é: ".$genero."<br>";
			echo "Sua data de lancamento é: ".$lancamento."<br>";
			
			$conexao = DBConnect();
			
			$sql = "INSERT INTO tblfilmes(idfilme, titulo, genero, lancamento) values (0, '$titulo', '$genero', '$lancamento')";
			
			if (mysqli_query($conexao, $sql)) {
				echo "Cadastro realizado com sucesso!";
			}
			else {
				echo "Erro: ".mysqli_error($conexao);
			}
		
		?>
	
	</body>

</html>