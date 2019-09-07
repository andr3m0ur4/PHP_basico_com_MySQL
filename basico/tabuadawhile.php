<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Tabuada de um número</title>
</head>
<body>
	<?php
		$n = 7;
	?>
	<h1> Tabuada do número <?php echo $n; ?> </h1>
	<?php
	    $c = 1;
	    while ( $c <= 10 ) {
	        echo "<h3> $n * $c = " . ( $n * $c ) . "</h3>";
	        $c++;
	    }
	?>	
</body>
</html>