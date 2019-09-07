<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>While - Laço de repetição</title>
</head>
<body>
	<h1> While - Títulos H </h1>
	<?php
		$i = 1;
		while ( $i <= 6 ) {
			echo "<h$i> Olá Mundo </h$i>";
			$i++;
		}
	?>
	<?php  
		$l = 5;
		$c = 3;
	?>
	<h1> While - Tabela <?php echo "$l x $c"; ?> </h1>
	<?php  
		echo "<table border='1'>";
		$il = 1;
		while ( $il <= $l ) {	// Criar as linhas da tabela
			echo "<tr>";
			$ic = 1;
			while ( $ic <= $c ) {
				echo "<td>André Moura</td>";
				$ic++;
			}
			echo "</tr>";
			$il++;
		}
		echo "</table>";
	?>
</body>
</html>