<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Tipos de Dados</title>
</head>
<body>
	<h1>Tipos de Dados</h1>
	<?php
	
		$a_bool = TRUE;   // um booleano
		$a_str  = "foo";  // uma string
		$a_str2 = 'foo';  // uma string
		$an_int = 12;     // um inteiro

		echo '<h3>Variável $a_bool (Tipo, valor) : ' . gettype( $a_bool ) . ', ' . $a_bool . '</h3>';
		echo '<h3>Variável $a_str (Tipo, valor) : ' . gettype( $a_str ) . ', ' . $a_str . '</h3>';
		echo '<h3>Variável $an_int (Tipo, valor) : ' . gettype( $an_int ) . ', ' . $an_int . '</h3>';
		var_dump ( $a_str2 );
		
		// Se ele é um inteiro, incrementa-o com quatro
		/*
		if (is_int($an_int)) {
			$an_int += 4;
		}

		// Se $bool é uma string, mostre-a
		// (não imprime nada)
		if (is_string($a_bool)) {
			echo "String: $a_bool";
		}
		*/
	?>
</body>
</html>