<h1 style="text-align: center;">Bem-vindos à Minha Agenda, para acessar o sistema, por favor faça login</h1>

<form method="post" action="index.php">
	<div class="col-sm-6 mx-auto mt-3">
		<label class="badge badge-secondary text-left">Usuário:</label>
		<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
	</div>
	<div class="col-sm-6 mx-auto mt-3">
		<label class="badge badge-secondary text-left">Senha:</label>
		<input type="password" name="senha" placeholder="Digite a senha" class="form-control">
	</div>
	<div class="col-sm-6 mx-auto mt-3 text-center">
		<button class="btn btn-success">Entrar</button>
	</div>
</form>

<?php if ( isset ( $_GET['erro'] ) ) { ?>
<div class="alert alert-danger col-sm-6" role="alert">
	Usuário e/ou senha inválidos.
</div>
<?php } ?>