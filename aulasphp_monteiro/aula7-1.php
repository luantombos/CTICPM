<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Classe Pai e Classe Filha</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			
			
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			class pai {
				public $idade;
				public $altura;
				public $peso;
				public $cor;
				
				public function opniao(){
					echo "Pai é quem cria ! ";
				}
			}
			
			// Criação da classe filha
			class filha extends pai {
				public $genero;
			}
			
			// Criação da instância/objeto pessoa
			$pessoa = new filha();
			
			$pessoa->idade = 17;
			$pessoa->altura = "1.72M";
			$pessoa->peso = "75Kgs";
			$pessoa->cor = "caucasiana";
			$pessoa->genero = "feminino";
			
			// Chamando os atributos
			echo "A idade é: ".$pessoa->idade."<p>";
			echo "A altura é: ".$pessoa->altura."<p>";
			echo "O peso é: ".$pessoa->peso."<p>";
			echo "A cor é: ".$pessoa->cor."<p>";
			echo "O gênero é: ".$pessoa->genero."<p>";
			
			//$pai->opniao();
			
			//Fim Código
		
		?>
	
	</body>

</html>