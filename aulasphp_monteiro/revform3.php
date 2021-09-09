<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Aluguel de Filmes - Locadora NerdMaster</title>

		<meta name="author" content="Luan Monteiro">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="fixclass_aula10.css" />

	</head>				

	<body>
	
		<div class="content">
		<div id="cadastro">
		<form method="post" action="revresp3.php"> 
		<h1>Aluguel</h1> 
		 
		<p> 
		<label for="filme">Filme</label>
		<select id="filme" name="selfilme" required="required">
		
		<option value="">		<?php
	
		function DBConnect(){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$database = 'fixacao1';
		
		$link = mysqli_connect($host, $user, $pass, $database) or die (mysqli_error($link));
					
		mysqli_set_charset($link, 'utf8') or die (mysqli_error($link));
		
		return $link;
		
		}
		
		$conexao = DBConnect(); 

		$selfilme = "select * from tblfilmes";
		
		$q = mysqli_query ($conexao, $selfilme) or die (mysqli_error($conexao, $selfilme));
		
		$row = mysqli_fetch_array ($q);
		
		echo $row;
		
		function DBClose($link) {
		mysqli_close($link) or die(mysqli_error($link));
		}
	
	?>
		

		
		</option>
		</select>
		</p>
		
		<p> 
		<label for="endereco_cad">Endereço</label>
		<input id="endereco_cad" name="txtendereco" required="required" type="text" placeholder="Endereço" size=200 maxlength=150  />
		</p>
		
		<p> 
		<label for="bairro_cad">Bairro</label>
		<input id="bairro_cad" name="txtbairro" required="required" type="text" placeholder="Bairro" size=60 maxlength=50  />
		</p>
		
		<p> 
		<label for="cep_cad">CEP</label>
		<input id="cep_cad" name="txtcep" required="required" type="text" placeholder="CEP" size=10 maxlength=9  />
		</p>
		
		<p> 
		<label for="cidade_cad">Cidade</label>
		<input id="cidade_cad" name="txtcidade" required="required" type="text" placeholder="Cidade" size=60 maxlength=50  />
		</p>
		
		<p> 
		<label for="estado_cad">Estado</label>
		<input id="estado_cad" name="txtestado" required="required" type="text" placeholder="Estado" size=4 maxlength=2  />
		</p>
		
		<p> 
		<label for="tel_cad">Telefone</label>
		<input id="tel_cad" name="txttelefone" required="required" type="tel" placeholder="Telefone" size=20 maxlength=16  />
		</p>
		 
		<p> 
		<label for="email_cad">E-mail</label>
		<input id="email_cad" name="txtemail" required="required" type="email" placeholder="seu_email@exemplo.com" size=60 maxlength=50  /> 
		</p>
		
		<p> 
		<label for="nasc_cad">Data de Nasc</label>
		<input id="nasc_cad" name="txtnasc" required="required" type="date" placeholder="Data de Nascimento" />
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