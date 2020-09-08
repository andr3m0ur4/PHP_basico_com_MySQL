<?php

	$usuario = new Usuario();

	// Inserir o usuário
	if (isset($_POST['btinserir'])) {
		$nome = addslashes($_POST['usu_nome']);
		$email = addslashes($_POST['usu_email']);
		$login = addslashes($_POST['usu_login']);
		$senha = md5(addslashes($_POST['usu_senha']));

		$usuario = new Usuario(0, $nome, $email, $login, $senha);
		$con = new Conexao();
		$dal = new DALUsuario($con);
		$dal->inserir($usuario);
		$usuario = new Usuario();
	}

	// Alterar o usuário
	if (isset($_POST['btalterar'])) {
		$codigo = intval($_POST['usu_cod']);
		$nome = addslashes($_POST['usu_nome']);
		$email = addslashes($_POST['usu_email']);
		$login = addslashes($_POST['usu_login']);
		$senha = md5(addslashes($_POST['usu_senha']));

		$usuario = new Usuario($codigo, $nome, $email, $login, $senha);
		$con = new Conexao();
		$dal = new DALUsuario($con);
		$dal->alterar($usuario);
		$usuario = new Usuario();
	}

	// Excluir um registro
	if (isset($_GET['op']) && $_GET['op'] == 'excluir') {
		$con = new Conexao();
		$dal = new DALUsuario($con);
		$codigo = intval($_GET['cod']);
		$flag = $dal->excluir($codigo);
		if (!$flag) {
			$msg = 'Não foi possível excluir o registro. O registro possui contatos cadastrados.';
		}
	}

	// Carregar um registro
	if (isset($_GET['op']) && $_GET['op'] == 'alterar') {
		$con = new Conexao();
		$dal = new DALUsuario($con);
		$codigo = intval($_GET['cod']);
		$usuario = $dal->carregarUsuario($codigo);
	}

	$valor = isset($_POST['localizar']) ? $_POST['usu_nome'] : '';
	$con = new Conexao();
	$dal = new DalUsuario($con);
	$resultado = $dal->localizar($valor);
	$par = false;
	
	include_once './views/view_usuario.php';
	