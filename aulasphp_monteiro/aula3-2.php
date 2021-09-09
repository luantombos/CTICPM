<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Variáveis em PHP</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			$nome = "Luan Monteiro";
			$num1 = 10;
			$num2 = 20.5;
			$soma = $num1+$num2;
			$data = date('d/m/Y');
			
			echo "Meu nome é: ".$nome."<p>";
			echo "O valor da variável num1 é igual à: ".$num1."<p>";
			echo "O valor da variável num2 é igual à: ".$num2."<p>";
			echo "A data de hoje é: ".$data."<p>";
			echo "A soma de ".$num1." mais ".$num2." é igual à ".$soma;
		
		?>
	
	</body>

</html>