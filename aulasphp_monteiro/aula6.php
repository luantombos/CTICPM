<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Estrutura de Repetição</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$var1 = 0;
			$var2 = 0;
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			while ($var1 <= 10) {
				echo "O valor da variável var1 é igual à: ".$var1."<br>";
				$var1+=2;
			}
			
			echo "<p>";
			
			do {
				echo "O valor da variável var2 é igual à :".$var2."<br>";
				$var2+=3;
			}
			while ($var2 <= 10);
			
			echo "<p>";
			
			for ($var3 = 0; $var3 <= 10; $var3++) {
				echo "O valor da variável var3 é igual à: ".$var3."<br>";
			}
			
			//Fim Código
		
		?>
	
	</body>

</html>