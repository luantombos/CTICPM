<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Upload de Arquivos</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>
	


		<?php
		
			//Início Variáveis
			
			
			
			//Fim Variáveis
			
			/*##########################################################*/
			
			//Início Código
			
			if(isset($_FILES['nomearquivo']['name'])) {
				
				$diretorio = "c:\\xampp\\htdocs\\aulasphp_monteiro\\";
				
				$file = $diretorio.$_FILES['nomearquivo']['name'];
				
				$nome = $_FILES['nomearquivo']['name'];
				
			
			if (move_uploaded_file( $_FILES['nomearquivo']['tmp_name'], $file)){
				
				print "upload realizado com sucesso";
				
			} else {
				
				print "Erro ao fazer o upload".$_FILES['nomearquivo']['error'];
				
			}
			
			echo "<p>";
			
			echo "<pre>";
			print_r ($_FILES);
			echo "</pre>";
			
			}
			
			echo '<img src="'.$nome.'">';
			
			//Fim Código
		
		?>
	
	
	
	</body>

</html>