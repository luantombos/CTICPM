<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Suas Respostas</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			require 'fixconect_aula10.php';
			
			$nome = $_POST['txtnome'];
			$endereco = $_POST['txtendereco'];
			$bairro = $_POST['txtbairro'];
			$cep = $_POST['txtcep'];
			$cidade = $_POST['txtcidade'];
			$estado = $_POST['txtestado'];
			$telefone = $_POST['txttelefone'];
			$email = $_POST['txtemail'];
			$nasc = $_POST['txtnasc'];
			
			echo "Seu nome é: ".$nome."<br>";
			echo "Seu endereço é: ".$endereco."<br>";
			echo "Seu bairro é: ".$bairro."<br>";
			echo "Seu CEP é: ".$cep."<br>";
			echo "Sua cidade é: ".$cidade."<br>";
			echo "Seu estado é: ".$estado."<br>";
			echo "Seu telefone é: ".$telefone."<br>";
			echo "Seu email é: ".$email."<br>";
			echo "Sua data de nascimento é: ".$nasc."<br>";
			
			$conexao = DBConnect();
			
			$sql = "INSERT INTO tblclientes(idcliente, nomecliente, endereco, cep, cidade, estado, telefone, email, aniversario) values (0, '$nome', '$endereco', '$bairro', '$cep', '$cidade', '$estado', '$telefone', '$email, '$nasc')";
			
			if (mysqli_query($conexao, $sql)) {
				echo "Cadastro realizado com sucesso!";
			}
			else {
				echo "Erro: ".mysqli_error($conexao);
			}
		
		?>
	
	</body>

</html>