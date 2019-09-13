<?php  
include_once 'class/Pessoa.php';
include_once 'class/Usuario.php';
include_once 'class/Contato.php';
include_once 'class/Conexao.php';
include_once 'class/DAL/DALUsuario.php';
include_once 'class/DAL/DALContato.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Minha Agenda</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<!-- Todo o conteúdo do cabeçalho -->

	</header>
	<nav>
		<?php include_once 'estrutura/menu.php'; ?>
	</nav>
	<main>
		<!-- Todo o conteúdo do principal -->
		<article>
			<!-- Todo o conteúdo de notícia -->
			<?php include_once 'estrutura/principal.php'; ?>
		</article>
	</main>
	<footer>
		<?php include_once 'estrutura/rodape.php'; ?>
	</footer>
</body>
</html>