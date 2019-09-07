<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Expressões de Comparação</title>
</head>
<body>
	<h1> Expressão de comparação - IF </h1>
	<?php
		$v1 = 15;
		$v2 = 150;

		if ( $v1 < $v2 ) {
			echo "<h3> O valor $v1 é menor do que o valor $v2 </h3>";
		}
		if ( $v1 <= $v2 ) {
			echo "<h3> O valor $v1 é menor ou igual ao valor de $v2 </h3>";
		}
		if ( $v1 > $v2 ) {
			echo "<h3> O valor $v1 é maior do que o valor $v2 </h3>";
		}
		if ( $v1 >= $v2 ) {
			echo "<h3> O valor $v1 é maior ou igual ao valor de $v2 </h3>";
		}
		if ( $v1 == $v2 ) {
			echo "<h3> O valor $v1 é igual ao valor de $v2 </h3>";
		}
		if ( $v1 != $v2 ) {
			echo "<h3> O valor $v1 é diferente do valor $v2 </h3>";
		}
	?>	
</body>
</html>