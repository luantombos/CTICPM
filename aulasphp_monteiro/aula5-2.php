<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Estruturas de Decisão</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$nasc = 2017;
			
			$data = 2021;
			
			$idade = $data - $nasc;
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			if ($idade <= 12){
				echo "Você é uma criança!";
			} elseif ($idade <= 18) {
				echo "Você é um adolescente!";
			} elseif ($idade <= 60) {
				echo "Você é uma adulto!";
			} else {
				echo "Você é um idoso!";
			}
			
			//Fim Código
		
		?>
	
	</body>

</html>