<?php  

$op = '';
$pg = 'index';
if ( isset ( $_GET['pg'] ) ) {
	//$op = $_GET['op'];
	$pg = $_GET['pg'];
}

if ( $pg == 'index' ) {
	include_once 'estrutura/inicial.php';
}
if ( $pg == 'contato' ) {
	include_once 'telas/listar_contato.php';
}
if ( $pg == 'usuario' ) {
	include_once 'telas/listar_usuario.php';
}
?>