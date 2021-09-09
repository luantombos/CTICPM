<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Exercício aula 5 - Estrutura de Decisão</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			$sorteio = rand(0,5);
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			if(isset($_POST["botao"]){
			
			echo "O número sorteado foi: ".$sorteio."<p>";
			
			switch ($sorteio) {
				case 0:
					echo "Você perdeu a vez";
					break;
					
				case 1:
					echo "Avance 1 casa";
					break;
					
				case 2:
					echo "Você ganhou um bônus! Avance 3 casas";
					break;
				
				case 3:
					echo "Deu azar! Volte 2 casas";
					break;
				
				case 4:
					echo "Você achou um tesouro! Avance 5 casas";
					break;
				
				default:
					echo "Jogue novamente";
					break;
			}
			}
			
			//Fim Código
		
		?>
		
		<form action="" method="post">
			<input type="submit" value="Sortear novo número" name="botao">
		</form>
	
	</body>

</html>