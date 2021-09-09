<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Funções com Referências</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$num1 = 5;
			$num2 = 10;
			$texto = "Esse texto deve ser chamado pela função.";
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			echo "<font size=6>";
			
			function multiplicacao($num1,$num2) {
				return $num1 * $num2;
			}
			
			echo "A multiplicação de <b>".$num1."</b> e <b>".$num2."</b> é igual a: <b>".multiplicacao($num1,$num2)."</b><p>";
			
			function teste() {
				global $texto;
				echo $texto;
			}
			
			teste();
			
			echo "<p>".$texto;
			
			
			echo "</font>";
			
			//Fim Código
		
		?>
	
	</body>

</html>