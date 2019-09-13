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
	include_once 'class/DAL/DALContato.php';

	/*
	$obj = new Usuario ( 1, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'andre_moura', '12345' );
	$obj2 = new Contato ( 1, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'Rua 7', 'Residencial Espanha', 
		'', 'Guaratinguetá', '12507-560', 'SP', '', '(12) 9 8856-3036', '1' );
	*/
	
	/*
	$usuario = new Usuario ( 0, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'andre_moura', '123456789' );
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
	*/

	/*foreach ( $retorno as $result ) {
		foreach ( $result as $key => $value ) {
			echo "<strong>$key:</strong> $value<br>";
		}
	}*/

	/*
	$contato = new Contato ( 0, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'Rua Sete', 
		'Residencial Espanha', '', 'Guaratinguetá', '12510-564', 'SP', '12 3105 5686', '(12) 9 8856-3036', '1' );
	$con = new Conexao ( );
	$dal = new DALContato ( $con );
	$dal -> inserir ( $contato );
	$contato -> setCodigo ( 1 );
	//$dal -> alterar ( $contato );
	//$dal -> excluir ( 5 );
	$resultado = $dal -> localizar ( 'a' );
	while ( $registro = $resultado -> fetch_assoc ( ) ) {
		foreach ( $registro as $key => $value ) {
			echo "<strong>$key:</strong> $value<br>";
		}
		echo '<br>';
	}
	*/
		
	?>
</body>
</html>