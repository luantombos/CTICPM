<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Operadores Lógicos</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$var1 = 10;
			
			$var2 = 7;
			
			$var3 = 5;
			
			$comp1 = $var1 >= $var2;
			
			$comp2 = $var1 >= $var3;
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			echo "O resultado da comparação de var1 igual var2 e var1 igual var3: ".(!  $comp1 && $comp2)."<p>"; #&& representa o operador AND
			
			echo "O resultado da comparação de var1 igual var2 e var1 igual var3: ".(!$comp1 || $comp2)."<p>"; #|| respresente o operadro OR
			
			//Fim Código
		
		?>
	
	</body>

</html>