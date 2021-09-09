<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Operadores Matemáticos</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>

		<?php
		
			//Variáveis
			
			$num1 = "13";
			
			$num2 = "5";
			/*
			$soma = $num1 += $num2;
			
			$subtracao = $num1 -= $num2;
			
			$multiplicacao = $num1 *= $num2;
			
			$divisao = $num1 /= $num2;
			*/
			$modulo = $num1 %= $num2;
			
			//Variáveis
			
			/*##########################################################*/
			
			//Código
			
			echo "A soma de num1 e num2 é igual à ".($num1+=$num2)."<p>"; #Soma
			
			echo "O novo valor de num1 é ".$num1."<p>"; #Pega o resultado do cálculo anterior e coloca no lugar da variável 1
			
			echo "A subtração de num1 e num2 é igual à ".($num1-=$num2)."<p>"; #Subtração
			
			echo "O novo valor de num1 é ".$num1."<p>"; #Pega o resultado do cálculo anterior e coloca no lugar da variável 1
			
			echo "A multiplicação de num1 e num2 é igual à ".($num1*=$num2)."<p>"; #Multiplicação
			
			echo "O novo valor de num1 é ".$num1."<p>"; #Pega o resultado do cálculo anterior e coloca no lugar da variável 1
			
			echo "A divisão de num1 e num2 é igual à ".($num1/=$num2)."<p>"; #Divisão
			
			echo "O novo valor de num1 é ".$num1."<p>"; #Pega o resultado do cálculo anterior e coloca no lugar da variável 1
			
			echo "A módulo de num1 e num2 é igual à ".$modulo."<p>"; #Módulo é o que sobra da divisão, o resto.
			
			//Código
		
		?>
	
	</body>

</html>