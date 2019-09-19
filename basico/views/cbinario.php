<form method="POST">
	<fieldset class="form-group">
		<legend class="col-form-label col-sm-6 pt-0">
			Informe um número inteiro para converter o mesmo para binário:
		</legend>			
		<label for="valor" class="col-sm-2 col-form-label">Número:</label>
		<input type="number" name="valor" class="col-sm-4 form-control"><br>
		<input type="submit" name="enviar" value="Converter" class="btn btn-primary">
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