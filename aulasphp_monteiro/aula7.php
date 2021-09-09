<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Classes e objetos</title>

		<meta name="author"content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Início Variáveis
			

			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			class televisao {

				public $tela;
				public $tipo;
				public $cor;
				public $voltagem;
				
				public function ligar() {
					echo "Ligando a televisão!"."<p>";
					echo "Sintonizando o último canal recebido!"."<p>";
				}
				
				public function mostrarImagem() {
					echo "Exibindo imagens do canal!"."<p>";
					echo "Executando sons do canal"."<p>";
					echo "Exibindo dados do canal na legenda"."<p>";
				}
			}


				// Criando a instância da classe televisão
				$tv = new televisao();
				
				// Atribuir as caracteristicas dos atributos
				$tv->tela ="52 polegadas";
				$tv->tipo ="Oled";
				$tv->cor ="Black Piano";
				$tv->voltagem ="bivolt";
				
				// Mostrar os atributos criados
				echo "O tamanho da tela do objeto TV é:". $tv->tela ."<p>";
				echo "O tipo objeto TV é:". $tv->tipo ."<p>";
				
				// Executar os métodos criados
				$tv->ligar();
				echo "<p>";
				
				$tv->mostrarImagem();
			
			//Fim Código
		
		?>
	
	</body>

</html>