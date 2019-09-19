<form method="POST">
	<fieldset class="form-group">
		<legend class="col-form-label col-sm-6 pt-0">
			Informe um número para verificar se o mesmo é um número primo:
		</legend>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="valor" class="col-sm-2 col-form-label">Número:</label>
				<select name="valor" class="col-sm-8 form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="outrovalor">Definir manualmente</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="outrovalor" class="col-sm-2 col-form-label">Número:</label>
				<input type="number" name="outrovalor" class="col-sm-8 form-control">
			</div>
		</div>
		<br>
		<input type="submit" name="enviar" value="Verificar" class="btn btn-primary">
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