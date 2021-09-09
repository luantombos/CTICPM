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
			require 'provaconexao.php';
			
			$nome = $_POST['txtnome'];
			$endereco = $_POST['txtendereco'];
			$bairro = $_POST['txtbairro'];
			$cep = $_POST['txtcep'];
			$telefone = $_POST['txttelefone'];
			$email = $_POST['txtemail'];
			$nasc = $_POST['txtnasc'];

			
			echo "Seu nome é: ".$nome."<br>";
			echo "Seu endereço é: ".$endereco."<br>";
			echo "Seu bairro é: ".$bairro."<br>";
			echo "Seu CEP é: ".$cep."<br>";
			echo "Seu telefone é: ".$telefone."<br>";
			echo "Seu email é: ".$email."<br>";
			echo "Sua data de nascimento é: ".$nasc."<br>";
			
			$conexao = DBConnect();
			
			$sql = "INSERT INTO tblclientes(idcliente, nomecliente, endereco, bairro, cep, telefone, email, aniversario) values (0, '$nome', '$endereco', '$bairro', '$cep', '$telefone', '$email', '$nasc')";
			
			if (mysqli_query($conexao, $sql)) {
				echo "Cadastro realizado com sucesso!";
			}
			else {
				echo "Erro: ".mysqli_error($conexao);
			}
		
		?>
	
	<a href="provarel1.php">Gerar relatório de clientes</a>
	
	</body>

</html>