<?php
	include('conect.php');

	$isbn = $_POST['isbn'];
	$titulo = $_POST['titulo'];
	$ano = $_POST['ano'];
	$imgCapa;
	$livro;
	$validade=1;
	

	$existeEditora = $_POST['existeEditora'];
	$existeAutor = $_POST['existeAutor'];

	$autor;
	$editora;

	$database = 'red_box';
	mysqli_select_db(  $con ,$database) or die( 'Erro na seleção do banco' );
	$arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:"";
	if(isset($_FILES['arquivo'])){
		$nomeArquivo = $arquivo['name'];
		move_uploaded_file($_FILES['arquivo']['tmp_name'], '../img/capas/'.$nomeArquivo);
	}
	$livro = isset($_FILES['livro'])?$_FILES['livro']:"";
	if(isset($_FILES['livro'])){
		$nomeLivro = $livro['name'];
		move_uploaded_file($_FILES['livro']['tmp_name'], '../books/'.$nomeLivro);
	}
	if($existeAutor=='sim'){
		$autor = $_POST['autorSim'];		
	}
	else if($existeAutor=='nao'){
		$autor = $_POST['autorNao'];
		$query = "INSERT INTO autores (nome) VALUES ('$autor')";
		$result_query = mysqli_query($con, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
	}
	if($existeEditora=='sim'){
		$editora = $_POST['editoraSim'];
	}
	if($existeEditora=='nao'){
		$editora = $_POST['editoraNao'];		
		$query = "INSERT INTO editoras (nome) VALUES ('$editora')";
		$result_query = mysqli_query($con, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
	}
	


	#################################################################################
	#INSERIR LIVRO
	
		$idAutor = mysqli_query($con, "SELECT id_autor as id FROM autores WHERE nome='$autor'") or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
		$idA = mysqli_fetch_array($idAutor);
		$idEditora = mysqli_query($con, "SELECT id_editora as id FROM editoras WHERE nome='$editora'") or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
		$idE = mysqli_fetch_array($idEditora);
		$query = "INSERT INTO livros (isbn, titulo, fk_autor, imgCapa, fk_editora, anoEdicao, download) VALUES ('$isbn', '$titulo', '$idA[0]', 
		'$nomeArquivo', '$idE[0]', '$ano', '$nomeLivro')";
		$result_query = mysqli_query($con, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() ); 
	
	echo 'Funcionou! <form action="../index.php" >    <button> Home </button></form>';
?>