<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	include_once 'class/Usuario.php';

	$obj = new Usuario ( 1, 'André Moura', 'andre.benedicto@etec.sp.gov.br', 'andre_moura', '@ndr3' );
	
	echo "<h1> Dados dos Usuários </h1>";
	echo "<h2> Código: {$obj -> getCodigo ( )} </h2>";
	echo "<h2> Nome: {$obj -> getNome ( )} </h2>";
	echo "<h2> Email: {$obj -> getEmail ( )} </h2>";
	echo "<h2> Login: {$obj -> getLogin ( )} </h2>";
	echo "<h2> Senha: {$obj -> getSenha ( )} </h2>";
	?>
</body>
</html>