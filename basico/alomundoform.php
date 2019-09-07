<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Alô Mundo !!!</title>
</head>
<body>
	<?php  
		$msg = "Clique em voltar para informar um nome na página de entrada.";
		if ( isset ( $_POST['usuario'] ) ) {
			$nome = $_POST['usuario'];
			if ( $_POST['genero'] == 'Masculino' ) {
				$msg = "Olá Sr $nome, tudo bem?";
			}else if ( $_POST['genero'] == 'Feminino' ) {
				$msg = "Olá Sra $nome, tudo bem?";
			}
		}
		?>
		<script type="text/javascript">
			alert("<?php echo $msg; ?>");
		</script>
	<a href="alomundoformentrada.php"> Voltar </a>
</body>
</html>