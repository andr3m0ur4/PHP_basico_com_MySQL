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