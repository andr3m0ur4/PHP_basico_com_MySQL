<?php

	$usuario = addslashes($_POST['usuario']);
	$senha = md5($_POST['senha']);

	$con = new Conexao();
	$dal = new DALUsuario($con);
	$resultado = $dal->verificarLogin($usuario, $senha);

	if ($resultado) {
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $usuario;

		header('Location: index.php');
	} else {
		header('Location: index.php?erro');
	}
