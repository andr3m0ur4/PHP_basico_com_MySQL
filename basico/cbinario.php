<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Número Binário</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Informe um número inteiro para converter o mesmo para binário:</legend>			
			<label for="valor">Número:</label>
			<input type="number" name="valor">
			<input type="submit" name="enviar" value="Converter">
		</fieldset>
	</form>
	<?php  
		$n = 0;
		if ( isset ( $_POST['enviar']) ) {
			$n = $_POST['valor'];
			$resultado = $n;
			$binario = '';
			while ( $resultado >= 2 ) {
				$resto = $resultado % 2;
				$resultado = ( int ) ( $resultado / 2 );
				$binario = $resto . $binario;
			}
			$binario = $resultado . $binario;
			echo "<h1>O número $n em binário é: $binario</h1>";
		}
	?>
</body>
</html>