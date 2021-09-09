<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Cadastro de Filmes</title>

		<meta name="author" content="Luan Monteiro">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="fixclass_aula10.css" />

	</head>				

	<body>

		<div class="content">
		<div id="cadastro">
		<form method="post" action="revresp2.php"> 
		<h1>Cadastro de Filmes</h1> 
		 
		<p> 
		<label for="titulo">Nome do Filme</label>
		<input id="titulo" name="txttitulo" required="required" type="text" placeholder="Nome do Filme" size=60 maxlength=50 />
		</p>
		
		<p> 
		<label for="genero">Gênero</label>
		<input id="genero" name="txtgenero" required="required" type="text" placeholder="Gênero" size=200 maxlength=150  />
		</p>

		<p> 
		<label for="lancamento">Lançamento</label>
		<input id="lancamento" name="txtlancamento" required="required" type="date" placeholder="Data de Lançamento" size=12 maxlength=10 />
		</p>
		 
		<p align="center"> 
		<input type="submit" name="btnenviar" value="Enviar" />
		<input type="reset" name="btncancelar" value="Cancelar" />
		</p>
		</p>
		</form>
		</div>
		</div>
		</div>
	
	</body>

</html>