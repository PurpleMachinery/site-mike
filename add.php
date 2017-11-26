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
			<a href="search.php"><span class="spanIcone margemUp glyphicon glyphicon-search"></span></a><br/>
			<a href="add.php"><span class="spanIcone margemUp glyphicon glyphicon-plus"></span></a>
		</div>
		<div class="pes">
		<center>	
		<form action="adicionar.php" method="post">
		<br/><br/><br/>
		<div class="tt">
			ISBN: <input type="text" name="isbn"><br/><br/>
			TITULO: <input type="text" name="titulo"><br/><br/>
			ANO: <input type="text" name="ano"><br/><br/>
			<input type="radio" name="existe" value="sim"> AUTOR: <select name="autor">
						<?php
							include('methods/conect.php');

							mysqli_select_db(  $con ,$database) or die( 'Erro na seleção do banco' );
					 
							# Executa a query desejada 
							$query = "SELECT nome FROM autores"; 
							$result_query = mysqli_query($con, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
							 
							# Exibe os registros na tela 
							while ($row = mysqli_fetch_array($result_query)) { 
								print "<option>$row[nome]</option>";
							}
						?>
					</select>
			<input type="radio" name="existe" value="nao"> OR: <input type="text" name="autor"><br/><br/>
			<input type="radio" name="existe" value="sim"> Editora: <select name="autor">
						<?php
							include('methods/conect.php');

							mysqli_select_db(  $con ,$database) or die( 'Erro na seleção do banco' );
					 
							# Executa a query desejada 
							$query = "SELECT nome FROM editoras"; 
							$result_query = mysqli_query($con, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
							 
							# Exibe os registros na tela 
							while ($row = mysqli_fetch_array($result_query)) { 
								print "<option>$row[nome]</option>";
							}
						?>
					</select>
			<input type="radio" name="existe" value="nao"> OR: <input type="text" name="autor"><br/><br/>
			



			
			<input type="submit">
		</div>
		</form>
		</center>
		</div>
		<div class="footer">
			<h1>Copyright 2017</h1>
		</div>
	</div>
	</body>
</html>