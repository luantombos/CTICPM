<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Funções e Procedimentos</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			

			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			function adicao($num1,$num2) {
				return $num1 + $num2;
			}
			
			function multiplicacao($num1,$num2) {
				return $num1 * $num2;
			}
			
			$num1 = rand(0,10);
			$num2 = rand(0,10);
			
			echo "<font size=6>";
			echo "A soma de <b>".$num1."</b> e <b>".$num2."</b> é igual a: <b>".adicao($num1,$num2)."</b><p>";
			
			echo "A multiplicação de <b>".$num1."</b> e <b>".$num2."</b> é igual a: <b>".multiplicacao($num1,$num2)."</b><p>";
			
			echo "</font>";
			
			//Fim Código
		
		?>
	
	</body>

</html>