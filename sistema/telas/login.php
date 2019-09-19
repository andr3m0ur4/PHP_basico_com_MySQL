<center>
	<h1 style="text-align: center;">Bem-vindos à Minha Agenda, para acessar o sistema, por favor faça login</h1>

	<form method="post" action="index.php">
		<label class="badge badge-secondary text-left">Usuário:</label>
		<input type="text" name="usuario" placeholder="Nome do usuário" class="col-sm-6 form-control">
		<br>
		<label class="badge badge-secondary text-left">Senha:</label>
		<input type="password" name="senha" placeholder="Digite a senha" class="col-sm-6 form-control">
		<br>
		<input type="submit" value="Entrar" class="btn btn-success">
	</form>
	<br>

	<?php if ( isset ( $_GET['erro'] ) ) { ?>
	<div class="alert alert-danger col-sm-6" role="alert">
		Usuário e/ou senha inválidos.
	</div>
	<?php } ?>
</center>