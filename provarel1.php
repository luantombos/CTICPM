<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Relatório de Clientes</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
			echo "<pre>";
			require 'provaconexao.php';
			
			$conexao = DBConnect();
			
			$sql = mysqli_query($conexao, "select * from tblclientes");
			
	
			while ($dados = mysqli_fetch_array($sql)){
			
			echo $dados["nomecliente"]."<br>";
			
			}
		?>
	
	</body>

</html>