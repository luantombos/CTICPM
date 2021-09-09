<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Estrutura de Decisão SWITCH CASE</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$sorteio = 8;
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			switch ($sorteio) {
				case 1:
				echo "Você ganhou uma casa!";
				break;
				
				case 2:
				echo "Você ganhou uma carro!";
				break;
				
				case 3:
				echo "Você ganhou uma moto!";
				break;
				
				case 4:
				echo "Você ganhou uma R$ 1000,00!";
				break;
				
				case 5:
				echo "Você ganhou uma jogo de panelas!";
				break;
				
				case 6:
				echo "Você ganhou uma caderno!";
				break;
				
				default:
				echo "Você escolheu um valor inválido, escolha de 1 à 6!";
			}
			
			//Fim Código
		
		?>
	
	</body>

</html>