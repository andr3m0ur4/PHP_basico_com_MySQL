<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Operadores lógicos</title>
</head>
<body>
	<h1> Operadores lógicos </h1>
	<?php
	/*
		$a = 100;
		$b = 10;
		$c = 10;
		$msg = "<h1> Os valores informados não representam os lados de um triângulo </h1>";

		if ( ( $a + $b > $c ) AND ( $a + $c > $b ) AND ( $c + $b > $a ) ) {
			$msg = "<h1> Os valores informados representam os lados de um triângulo </h1>";
		}
		echo $msg;
	*/

		$a = 10;
		$b = 10;
		if ( ($a > 15 ) OR ( $b > 15 ) ) {
			echo "<h1>Entrou no IF</h1>";
		} else {
			echo "<h1>Não entrou no IF</h1>";
		}
	?>	
</body>
</html>