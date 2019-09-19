<?php  

$usuario = addslashes ( $_POST['usuario'] );
$senha = md5 ( $_POST['senha'] );

$con = new Conexao ( );
$dal = new DALUsuario ( $con );
$retorno = $dal -> verificarLogin ( $usuario, $senha );

if ( $retorno ) {
	session_start ( );
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	header ( 'location:index.php' );
} else {
	header ( 'location:index.php?erro' );
}
