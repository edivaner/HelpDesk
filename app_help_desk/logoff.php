<?php
	session_start();

	/*
	echo "<pre>";
		print_r($_SESSION);
	echo "<pre/>";
	//-----------------
	//remover índeces do array de sessão
	//unset() Remove um indise.

	unset($_SESSION['x']); //Remove apenas se o índice existir

	echo "<pre>";
		print_r($_SESSION);
	echo "<pre/>";
	//----------------------
	//Destruir a variável de sessão
	//session_destroy() destrói toda a sessão

	session_destroy();

	echo "<pre>";
		print_r($_SESSION);
	echo "<pre/>";
	//---------------------
	*/
	session_destroy();
	header("Location: index.php");
?>