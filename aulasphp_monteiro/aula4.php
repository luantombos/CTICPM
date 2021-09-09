<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Funções em PHP</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Variáveis
			
			$texto = "Microlins - Cursos Profissionalizantes";
			
			$texto2 = " Microlins ";
			
			//Variáveis
			
			/*##########################################################*/
			
			//Código
			
			echo "A variável texto possui: ".strlen ($texto)." caracteres."."<p>";
			
			echo "A palavra cursos está na ".strpos($texto,"Cursos")."ª posição, na variável texto."."<p>";
			
			echo "palavra".$texto2."palavra"."<p>";
			
			echo "palavra".ltrim($texto2)."palavra"."<p>"; #Remove o espaço à direita
			
			echo "palavra".rtrim($texto2)."palavra"."<p>"; #Remove o espaço à esquerda
			
			echo "palavra".trim($texto2)."palavra"."<p>"; #Remove o espaço antes e depois
			
			echo str_replace("Cursos","Aulas",$texto)."<p>"; #Substitui uma palavra pela outra
			
			echo substr($texto,12)."<p>"; #Remove tudo até a 12ª posição
			
			echo strtoupper($texto)."<p>"; #Coloca o texto todo maiúsculo
			
			echo strtolower($texto)."<p>"; #Coloca o texto todo minúsculo
			
			//Código
		
		?>
	
	</body>

</html>