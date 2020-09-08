<?php

	include_once './class/Pessoa.php';
	include_once './class/Usuario.php';
	include_once './class/Contato.php';
	include_once './class/Conexao.php';
	include_once './class/DAL/DALUsuario.php';
	include_once './class/DAL/DALContato.php';

	if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
		include_once './views/processa_login.php';
	}

	include_once './views/index.php';
