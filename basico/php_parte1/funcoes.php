<!DOCTYPE html)
<html lang"pt-br">
<head>
	<meta charset="utf-8">
	<title>Funções parte 1</title>
</head>
<body>
	<?php 
		function exibeOlaMundo ( ) {
			echo "<h1>Olá Mundo!!!</h1>";
		}

		function exibeMensagem ( $msg ) {
			echo "<h1>$msg</h1>";
		}

		exibeOlaMundo ( );
		exibeMensagem ( "Ola Mundo" );
		$oi = "Primeira aula sobre funções";
		exibeMensagem ( $oi );
	?>
</body>
</html>