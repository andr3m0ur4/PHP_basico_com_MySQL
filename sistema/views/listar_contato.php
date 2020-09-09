<?php

	$contato = new Contato();
	$con = new Conexao();
	$dal = new DalContato($con);

	// Inserir o contato
	if (isset($_POST['btinserir'])) {
		$nome = $_POST['con_nome'];
		$rua = $_POST['con_rua'];
		$bairro = $_POST['con_bairro'];
		$complemento = $_POST['con_complemento'];
		$cidade = $_POST['con_cidade'];
		$estado = $_POST['con_estado'];
		$cep = $_POST['con_cep'];
		$email = $_POST['con_email'];
		$telefone = $_POST['con_telefone'];
		$celular = $_POST['con_celular'];
		$cod_usuario = $_POST['usu_cod'];
		
		$contato = new Contato(
			0, $nome, $email, $rua, $bairro, $complemento, $cidade,
			$cep, $estado, $telefone, $celular, $cod_usuario
		);
		
		$dal->inserir($contato);
		$contato = new Contato();
	}

	// Alterar o contato
	if (isset($_POST['btalterar'])) {
		$codigo = intval($_POST['con_cod']);
		$nome = $_POST['con_nome'];
		$rua = $_POST['con_rua'];
		$bairro = $_POST['con_bairro'];
		$complemento = $_POST['con_complemento'];
		$cidade = $_POST['con_cidade'];
		$estado = $_POST['con_estado'];
		$cep = $_POST['con_cep'];
		$email = $_POST['con_email'];
		$telefone = $_POST['con_telefone'];
		$celular = $_POST['con_celular'];
		$cod_usuario = intval($_POST['usu_cod']);

		$contato = new Contato(
			$codigo, $nome, $email, $rua, $bairro, $complemento, $cidade, $cep,
			$estado, $telefone, $celular, $cod_usuario
		);
		
		$dal->alterar($contato);
		$contato = new Contato();
	}

	// Excluir um registro
	if (isset($_GET['op']) && $_GET['op'] == 'excluir') {
		$codigo = intval($_GET['cod']);
		$flag = $dal->excluir($codigo);

		if (!$flag) {
			$msg = 'Não foi possível excluir o registro. O registro possui contatos cadastrados.';
		}
	}

	// Carregar um registro
	if (isset($_GET['op']) && $_GET['op'] == 'alterar') {
		$codigo = intval($_GET['cod']);
		$contato = $dal->carregarContato($codigo);
	}

	// Buscar o nome para preencher o formulário
	$valor = isset($_POST['localizar']) ? $_POST['con_nome'] : '';
	$resultado = $dal->localizar($valor);
	$par = false;

	include_once './views/view_contato.php';
