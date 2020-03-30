<?php
	
	session_start();

	// $_SESSION['x'] = 'Oi, sou um valor de seção';
	// print_r($_SESSION);
	// echo "<hr/>";
	// echo $_SESSION['y'].'<br/>';


	//variavel que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2=> 'Usuário');
	
	// usuario do sistema
	$usuarios_app = array(
		array('id'=>1, 'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
		array('id'=>2, 'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
		array('id'=>3, 'email' => 'edivaner@help.com', 'senha' => '123', 'perfil_id' => 2),
	);
	/*
	echo "<pre>";
		print_r($usuarios_app);
	echo "</pre>";
	*/

	foreach ($usuarios_app as $user) {
		/*echo 'Usuário app: '.$user['email'].' Senha: '.$user['senha'];
		echo "<br/>";		
		echo 'Usuário form: '.$_POST["email"].'Senha: '.$_POST["senha"];
		echo "<hr/>";
		*/


		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST["senha"]) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

	if ($usuario_autenticado) {
		echo 'Usuario autenticado.';
		$_SESSION['autenticado']='SIM';
		$_SESSION['id']= $usuario_id;
		$_SESSION['perfil_id']= $usuario_perfil_id;
		header('Location: home.php');
	}else{
		$_SESSION['autenticado']='NÃO';
		header('Location: index.php?login=erro');
	}


	/* //Method='get'
	print_r($_GET);
	echo "<br />";
	echo $_GET['email'];
	echo "<br/>";
	echo $_GET['senha'];
	*/

	/*//Method='post'
	print_r($_POST);
	echo "<hr/>";
	echo $_POST["email"];
	echo "<br/>";
	echo $_POST["senha"];
	*/
?>