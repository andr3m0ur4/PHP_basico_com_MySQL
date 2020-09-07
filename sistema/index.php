<?php  
include_once 'class/Pessoa.php';
include_once 'class/Usuario.php';
include_once 'class/Contato.php';
include_once 'class/Conexao.php';
include_once 'class/DAL/DALUsuario.php';
include_once 'class/DAL/DALContato.php';
isset ( $_POST['usuario'] ) ? include_once 'telas/processa_login.php' : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Minha Agenda</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Agenda criado no curso de PHP com MySQL" />
	<meta name="keywords" content="curso php mysql agenda exemplo">
	<meta name="autor" content="André Moura">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<header>
		<!-- Todo o conteúdo do cabeçalho -->

	</header>

	<nav class="nav">
		<?php include_once 'estrutura/menu.php'; ?>
	</nav>

	<main>
		<!-- Todo o conteúdo do principal -->
		<article class="mb-4">
			<!-- Todo o conteúdo de notícia -->
			<?php include_once 'estrutura/principal.php'; ?>
		</article>
	</main>

	<footer>
		<?php include_once 'estrutura/rodape.php'; ?>
	</footer>
</body>
</html>