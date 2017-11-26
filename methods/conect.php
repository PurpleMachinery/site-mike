<?php
	# Substitua abaixo os dados, de acordo com o banco criado
	$user = "root"; 
	$password = ""; 
	$database = "red_box"; 
			 
	# O hostname deve ser sempre localhost 
	$hostname = "localhost"; 
			 
	# Conecta com o servidor de banco de dados 
	$con=mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 
?>