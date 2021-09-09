<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Operadores de Comparação</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$var1 = 10;
			
			$var2 = "10";
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			echo "Resultados booleanos no PHP aparecem como '1' se verdadeiro e 'vazio' se falso"."<p>";
			
			echo "Resultado var1 == var2: ".($var1 == $var2)."<p>";
			
			echo "Resultado var1 === var2: ".($var1 === $var2)."<p>";
			
			echo "Resultado var1 maior que var2: ".($var1 > $var2)."<p>";
			
			echo "Resultado var1 maior ou igual var2: ".($var1 >= $var2)."<p>";
			
			echo "Resultado var1 menor var2: ".($var1 < $var2)."<p>";
			
			echo "Resultado var1 menor ou igual var2: ".($var1 <= $var2)."<p>";
			
			echo "Resultado var1 diferente de var2: ".($var1 <> $var2)."<p>";
			
			echo "Resultado var1 diferente de var2: ".($var1 != $var2)."<p>";
			
			//Fim Código
		
		?>
	
	</body>

</html>