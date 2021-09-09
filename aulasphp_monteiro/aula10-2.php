<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Suas Respostas</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			require 'aula10.php';
			
			$nome = $_POST['txtnome'];
			$endereco = $_POST['txtendereco'];
			$telefone = $_POST['txttelefone'];
			$email = $_POST['txtemail'];
			
			echo "Seu nome é: ".$nome."<br>";
			echo "Seu endereço é: ".$endereco."<br>";
			echo "Seu telefone é: ".$telefone."<br>";
			echo "Seu email é: ".$email."<br>";
			
			$conexao = DBConnect();
			
			$sql = "INSERT INTO tblclientes(idcliente, nomecliente, enderecocliente, telcliente, emailcliente) values (0, '$nome', '$endereco', '$telefone', '$email')";
			
			if (mysqli_query($conexao, $sql)) {
				echo "Cadastro realizado com sucesso!";
			}
			else {
				echo "Erro: ".mysqli_error($conexao);
			}
		
		?>
	
	</body>

</html>