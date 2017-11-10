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
			<a href="#"><span class="spanIcone margemUp glyphicon glyphicon-user"></span></a><br/>
			<a href="#"><span class="spanIcone margemUp glyphicon glyphicon-search"></span></a><br/>
			<a href="#"><span class="spanIcone margemUp glyphicon glyphicon-cloud"></span></a>
		</div>
		<div class="livro">
			<center>
				<?php  
					# Substitua abaixo os dados, de acordo com o banco criado
					$user = "root"; 
					$password = ""; 
					$database = "red_box"; 
					 
					# O hostname deve ser sempre localhost 
					$hostname = "localhost"; 
					 
					# Conecta com o servidor de banco de dados 
					$con=mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 
					 
					# Seleciona o banco de dados 
					mysqli_select_db(  $con ,$database) or die( 'Erro na seleção do banco' );
					 
					# Executa a query desejada 
					$query = "SELECT * FROM livros"; 
					$result_query = mysqli_query($con, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
					 
					# Exibe os registros na tela 
					while ($row = mysqli_fetch_array($result_query)) { 
						print "<a href='#'><div class='bloco'>".
									"<img src='img/capas/$row[imgCapa].jpg'>".
									"<hgroup>".										
										"<h2>$row[titulo]</h2>".
										"<h3>$row[autor]</h3>".
										"<h4>$row[isbn]</h4>". 
									"</hgroup>" .
									"<br/>".
								"</div></a>";
					}					 
				?>
			</center>		
		</div>
		<div class="footer">
			<h1>Copyright 2017</h1>
		</div>
	</div>
	</body>
</html>