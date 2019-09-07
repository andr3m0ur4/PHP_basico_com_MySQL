<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Número Primo</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Informe um número para verificar se o mesmo é um número primo:</legend>
			<label for="valor">Número:</label>
			<select name="valor">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="outrovalor">Definir manualmente</option>
			</select>
			<br>
			<label for="outrovalor">Número:</label>
			<input type="number" name="outrovalor">
			<input type="submit" name="enviar" value="Verificar">
		</fieldset>
	</form>
	<?php  
		$n = 0;
		$contador = 0;
		if ( isset ( $_POST['enviar']) ) {
			if ( $_POST['valor'] != 'outrovalor' ) {
				$n = $_POST['valor'];
			} else {
				$n = $_POST['outrovalor'];
			}
			// lógica para determinar se número informado é primo
			for ( $i = 1; $i <= $n; $i++ ) {
				if ( $n % $i == 0) {
					$contador++;
				}
			}
			if ( $contador == 2 OR $n == 1 ) {
				echo "<h1> O número $n é um número primo </h1>";
			} else {
				echo "<h1> O número $n não é um número primo </h1>";
			}
		}
	?>
</body>
</html>