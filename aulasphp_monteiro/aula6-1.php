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
			
			$num1 = 4;
			$num2 = 6;
			
			echo "<font size=6>";
			echo "A soma de <b>".$num1."</b> e <b>".$num2."</b> é igual a: <b>".adicao($num1,$num2)."</b><p>";
			
			function processo(){
				echo "Esse é o resultado do procedimento processo()";
			}
			
			processo();
			
			echo "</font>";
			
			//Fim Código
		
		?>
	
	</body>

</html>