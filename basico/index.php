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
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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
		<article>
			<h1>Parte básica do curso</h1>
			<hr>
			<p>
				Aborda todos conceitos básicos da linguagem de PHP.
			</p>

			<p>
				Acessando o menu você irá testar alguns dos exemplos implementados no curso.
			</p>
			<p>
				<?php  
				include_once 'biblioteca_funcoes.php';
				$dia = dia_atual ( );
				echo exibeMensagem ( "Hoje é $dia" );
				?>
			</p>
		</article>
		
	</main>
	<footer>
		<p>Site desenvolvido por André Moura</p>
	</footer>
</body>
</html>