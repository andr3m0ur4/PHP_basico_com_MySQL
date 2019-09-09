<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tabuada</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Informe um número para efetuar o cálculo da tabuda:</legend>
			<label for="valor">Número:</label>
			<input type="number" name="valor" value="0"><br>
			<input type="submit" name="enviar" value="Calcular">
		</fieldset>
	</form>
	<?php  
		include_once 'biblioteca_funcoes.php';
		if ( isset ( $_POST['valor']) ) {
			$n = $_POST['valor'];
			exibeTabuada ( $n );
		}
	?>
</body>
</html>