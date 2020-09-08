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
	if ( isset ( $_POST['btalterar'] ) ) {
		$codigo = $_POST['usu_cod'];
		$nome = $_POST['usu_nome'];
		$email = $_POST['usu_email'];
		$login = $_POST['usu_login'];
		$senha = $_POST['usu_senha'];

		$usuario = new Usuario ( $codigo, $nome, $email, $login, $senha );
		$con = new Conexao ( );
		$dal = new DALUsuario ( $con );
		$dal -> alterar ( $usuario );
		$usuario = new Usuario ( );
	}

	// Excluir um registro
	if ( isset ( $_GET['op'] ) AND $_GET['op'] == 'excluir' ) {
		$con = new Conexao ( );
		$dal = new DALUsuario ( $con );
		$flag = $dal -> excluir ( $_GET['cod'] );
		if ( !$flag ) {
			$msg = 'Não foi possível excluir o registro. O registro possui contatos cadastrados.';
			echo $msg;
		}
	}

	// Carregar um registro
	if ( isset ( $_GET['op'] ) AND $_GET['op'] == 'alterar' ) {
		$con = new Conexao ( );
		$dal = new DALUsuario ( $con );
		$usuario = $_GET['cod'];
		$usuario = $dal -> carregarUsuario ( $usuario );
		
	}

	$valor = isset($_POST['localizar']) ? $_POST['usu_nome'] : '';
	$con = new Conexao();
	$dal = new DalUsuario($con);
	$resultado = $dal->localizar($valor);
	$par = false;
	
	include_once './views/view_usuario.php';
	