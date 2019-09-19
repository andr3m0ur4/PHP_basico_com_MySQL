<?php  

# Iniciar sessão
session_start ( );

# Conteúdo da página

if ( isset ( $_SESSION['login'] ) ) {
	if ( isset ( $_GET['pg'] ) ) {
		$pagina = $_GET['pg'];
	} else {
		$pagina = 'home';
	}
} else {
	$pagina = 'login';
}

switch ( $pagina ) {
	case 'contato': include_once 'telas/listar_contato.php'; break;
	case 'usuario': include_once 'telas/listar_usuario.php'; break;
	case 'login': include_once 'telas/login.php'; break;
	case 'inserir_aluno': include_once 'views/inserir_aluno.php'; break;
	case 'inserir_matricula': include_once 'views/inserir_matricula.php'; break;
	case 'inserir_curso': include_once 'views/inserir_curso.php'; break;
	default: include_once 'estrutura/inicial.php'; break;
}
