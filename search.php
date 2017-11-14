<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estylo.css">
	</head>
	<body>
	<div class="divContainer">
		<div class="divMenuLateral">
			<a href="index.php"><span class="spanIcone margemUp glyphicon glyphicon-home"></span></a><br/>
			<a href="autores.php"><span class="spanIcone margemUp glyphicon glyphicon-user"></span></a><br/>
			<a href="search.php"><span class="spanIcone margemUp glyphicon glyphicon-search"></span></a><br/>
			<a href="add.php"><span class="spanIcone margemUp glyphicon glyphicon-cloud"></span></a>
		</div>
		<div class="pes">
		<center>
			<div class="formulario">
				<form action="results.php" class="procurador" method="post">
					<input type="radio" name="tipo" value="titulo">Titulo: <br/><input type="text" name="titulo" class="rdb"><br/><br/>
					<input type="radio" name="tipo" value="autor">Autor: <br/><input type="text" name="autor" class="rdb"><br/><br/>
					<input type="radio" name="tipo" value="editora">Editora: <br/><input type="text" name="editora" class="rdb"><br/><br/>
					<input type="radio" name="tipo" value="isbn">ISBN: <br/><input type="text" name="isbn" class="rdb"><br/><br/>
					<input type="submit" value="ENVIAR"><br/><br/><br/><br/><br/><br/><br/>
				</form>
			</div>
		</center>
		</div>
		<div class="footer">
			<h1>Copyright 2017</h1>
		</div>
	</div>
	</body>
</html>