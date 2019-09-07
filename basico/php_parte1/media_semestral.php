<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Exercício - média de um aluno</title>
</head>
<body>
	<h1> Exercício - média de um aluno </h1>
	<?php
		$n1 = 5;
		$n2 = 7;
		$n3 = 3.2;
		$n4 = 8.5;
		$nap = 6;
		$media = ( $n1 + $n2 +$n3 + $n4 ) / 4;
		echo "<h3>1ª nota: $n1</h3>";
		echo "<h3>2ª nota: $n2</h3>";
		echo "<h3>3ª nota: $n3</h3>";
		echo "<h3>4ª nota: $n4</h3>";
		echo "<h3>Média geral: $media</h3>";
		echo "<h3>Média para aprovação: $nap</h3>";
		if ( $media >= $nap ) {
			echo "<h3>Resultado final: Aprovado</h3>";
		} else {
			echo "<h3>Resultado final: Reprovado</h3>";
		}
	?>	
</body>
</html>