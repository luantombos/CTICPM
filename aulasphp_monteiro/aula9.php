<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Upload de Arquivos</title>

		<meta name="author" content="Luan Monteiro">

	</head>				

	<body>
	
		<form enctype="multipart/form-data" action="aula9-1.php" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
		
		<p><font size=5><em>Envio de Arquivos</em></font></p></br>
	
		<font size=4><b>Arquivo para upload: </b></font><input type="file" name="nomearquivo">
		<input type="submit" name ="btnenviar" value="Upload do arquivo">
		

	</body>

</html>