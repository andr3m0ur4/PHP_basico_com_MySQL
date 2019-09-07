<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Comando de Decisão</title>
</head>
<body>
	<h1> Comando de Decisão - IF </h1>
	<?php
		$opcao = "PHP";
		//$opcao = "ASP.NET";
		$opcao = "Outro Valor";
		if ( $opcao == 'PHP' ){
			echo "<h2>Curso de programação PHP com MySQL</h2>";
		}
		if ( $opcao == 'ASP.NET' ){
			echo "<h2>Curso de programação ASP.NET</h2>";
		}
	?>	
</body>
</html>