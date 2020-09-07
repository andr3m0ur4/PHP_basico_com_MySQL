<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Curso de PHP parte básica</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Site criado no curso de PHP com MySQL" />
	<meta name="keywords" content="curso php mysql site exemplo">
	<meta name="autor" content="André Moura">
	<link rel="stylesheet" href="../css/folha_all.css">
	<link rel="stylesheet" href="../css/home.css">
</head>
<body>
	<header>
		<a href="../index.php"><img src="../images/html-css-js-php-mysql.png" alt=""></a>
	
		<nav id="secundario">
			<?php include_once 'menu.php'; ?>
		</nav>
	</header>

	<main>
	
		<?php 

		# Conteúdo da página

		if ( isset ( $_GET['pagina'] ) ) {
			$pagina = $_GET['pagina'];
		} else {
			$pagina = 'home';
		}
		
		switch ( $pagina ) {
			case 'tabuada': include 'views/tabuada.php'; break;
			case 'nprimo': include 'views/nprimo.php'; break;
			case 'cbinario': include 'views/cbinario.php'; break;
			default: include 'views/home.php'; break;
		}
		?>
		
	</main>

	<footer>
		<p>Site desenvolvido por André Moura</p>
	</footer>
</body>
</html>