<!DOCTYPE html)
<html lang"pt-br">
<head>
	<meta charset="utf-8">
	<title>Operadores Aritméticos</title>
</head>
<body>
	<?php
		// Variáveis
		$v1 = 7;
		$v2 = 6;
		$msg =  '<h1>Operadores Aritméticos</h1>';
		
		// Echo - Comando que escreve no documeno
		echo $msg;
		echo '<h3>' . $v1 . ' + ' . $v2 . ' = ' . ($v1 + $v2) . "</h3>";
		echo "<h3>$v1 - $v2 = " . ($v1 - $v2) . "</h3>";
		echo "<h3>$v1 * $v2 = " . ($v1 * $v2) . "</h3>";
		echo "<h3>$v1 / $v2 = " . ($v1 / $v2) . "</h3>";
		echo "<h3>$v1 % $v2 = " . ($v1 % $v2) . "</h3>";
	?>
</body>
</html>