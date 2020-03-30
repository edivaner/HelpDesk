<?php
	session_start();
	

	//Caso há algum (#) escrito pelo usuário, esse trecho irá retirar e separar cada trecho em uma variável.
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] .'#'. $titulo .'#'.$categoria.'#'.$descricao.PHP_EOL; //Formatando texto

	$arquivo = fopen('arquivo.hd', 'a'); //Abrindo arquivo e adicionando em uma variavel.

	fwrite($arquivo, $texto); //Escrevendo o texto
	fclose($arquivo); //Fechar aqruivo

	//echo $texto;
	header('Location: abrir_chamado.php');
?>