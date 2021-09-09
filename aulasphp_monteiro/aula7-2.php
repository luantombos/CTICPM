<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Outras funções PHP</title>

		<meta name="author" content="Luan Monteiro">

	</head>
	
	<body>
	
		<?php
			
			if (checkdate (6,200,2020)){
				echo "Data válida";
			} else {
				echo "Data inválida" ;
			}
			
			echo "<p>";
			echo floor(7.5)."<p>";
			echo floor(9.999)."<p>" ;
			echo round(8.4)."<p>";
			echo round(8.88888,2)."<p>";
			
			echo pow(2,2)."<p>";
			echo pow(2,3)."<p>";
			
			echo sqrt(25)."<p>";
			
			$booleana = true;
			$inteira = 5;
			$flutuante = 8.4;
			$texto = "texto";
			$nula = null;
			
			echo "A variável booleana comtém bool? ".is_bool($booleana)."<p>";
			
			echo "A variável inteira contém número inteiro? ".is_integer($inteira)."<p>";
			
			echo "A variável flutuante contém decimal? ".is_float($flutuante)."<p>";
			
			echo "A variável texto contém um texto? ".is_string($texto)."<p>";
			
			echo "A variável nula está vazia? ".is_null($nula)."<p>";
		
		?>
		
	</body>
	
</html>