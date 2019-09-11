<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	include_once 'class/Pessoa.php';
	include_once 'class/Usuario.php';
	include_once 'class/Contato.php';
	include_once 'class/Conexao.php';
	include_once 'class/DAL/DALUsuario.php';

	/*
	$obj = new Usuario ( 1, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'andre_moura', '12345' );
	$obj2 = new Contato ( 1, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'Rua 7', 'Residencial Espanha', 
		'', 'Guaratinguetá', '12507-560', 'SP', '', '(12) 9 8856-3036', '1' );
	*/
	
	
	$usuario = new Usuario ( 0, 'Andrew', 'andre.benedicto@etec.sp.gov.br', 'andre_moura', '@ndr3' );
	$con = new Conexao ( );
	$dal = new DALUsuario ( $con );
	//$dal -> inserir ( $usuario );
	$usuario -> setCodigo ( 5 );
	//$dal -> alterar ( $usuario );
	//$dal -> excluir ( 5 );
	$resultado = $dal -> localizar ( '' );
	while ( $registro = $resultado -> fetch_assoc ( ) ) {
		foreach ( $registro as $key => $value ) {
			echo "<strong>$key:</strong> $value<br>";
		}
		echo '<br>';
	}
	/*foreach ( $retorno as $result ) {
		foreach ( $result as $key => $value ) {
			echo "<strong>$key:</strong> $value<br>";
		}
	}*/
		
	?>
</body>
</html>