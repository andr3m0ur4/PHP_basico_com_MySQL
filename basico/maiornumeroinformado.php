<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP parte básica</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Determina o maior número informado:</legend>
			<label for="valor1">1° Número:</label>
			<input type="number" name="valor1" value="0"><br>
			<label for="valor2">2° Número:</label>
			<input type="number" name="valor2" value="0"><br>
			<label for="valor3">3° Número:</label>
			<input type="number" name="valor3" value="0"><br>
			<input type="submit" name="enviar" value="Calcular">
		</fieldset>
	</form>
	<?php
		include_once 'biblioteca_funcoes.php';
		if ( isset ( $_POST['enviar']) ) {
			$n1 = $_POST['valor1'];
			$n2 = $_POST['valor2'];
			$n3 = $_POST['valor3'];
			$maior = determinaMaiorValor ( $n1, $n2, $n3 );

			echo "<h1>O maior valor entre os números ($n1, $n2 e $n3) é $maior</h1>";
		}
	?>
</body>
</html>