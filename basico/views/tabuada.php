<form method="POST">
	<fieldset class="form-group">
		<legend class="col-form-label col-sm-5 pt-0">
			Informe um número para efetuar o cálculo da tabudas:
		</legend>
		<label for="valor" class="col-sm-2 col-form-label">Número:</label>
		<input type="number" name="valor" class="col-sm-4 form-control"><br>
		<input type="submit" name="enviar" value="Calcular" class="btn btn-primary">
	</fieldset>
</form>

<?php  
	include_once 'biblioteca_funcoes.php';
	if ( isset ( $_POST['valor']) ) {
		$n = $_POST['valor'];
		exibeTabuada ( $n );
	}
?>