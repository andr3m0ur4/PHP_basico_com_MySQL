<form method="POST" action="./index.php?pg=usuario">
	<div class="container">
		<div class="form-row mt-3">
			<label class="col-sm-2" for="usu_nome"><strong>Nome:</strong></label>
			<input type="text" name="usu_nome" size="100" value="<?= $usuario->__get('nome') ?>" class=" form-control col-sm-7" style="position: unset;">
		</div>
		<div class="form-row mt-3">
			<label class="col-sm-2" for="usu_email"><strong>E-mail:</strong></label>
			<input type="email" name="usu_email" size="100" value="<?= $usuario->__get('email') ?>" class="form-control col-sm-7">
		</div>
		<div class="form-row mt-3">
			<label class="col-sm-2" for="usu_login"><strong>Login:</strong></label>
			<input type="text" name="usu_login" size="42" value="<?= $usuario->__get('login') ?>" class="form-control col-sm-7">
		</div>
		<div class="form-row mt-3">
			<label class="col-sm-2" for="usu_nome"><strong>Senha:</strong></label>
			<input type="password" name="usu_senha" size="42" class="form-control col-sm-7">
		</div>
		<div class="form-row mt-3">
			<div class="col-sm-2"></div>
			<div class="mt-4">
				<?php if ($usuario->__get('codigo') == 0) : ?>
					<button name="btinserir" class="btn btn-success">Cadastrar</button>
				<?php else : ?>
					<button name="btalterar" class="btn btn-success">Salvar</button>
					<button name="btcancelar" class="btn btn-secondary">Cancelar</button>
                    <input type="hidden" name="usu_cod" value="<?= $usuario->__get('codigo') ?>">
                <?php endif ?>
			</div>
		</div>
	</div>
</form>

<form method="POST">
	<div class="container">
		<div class="form-row mt-4">
			<label for="usu_nome"><strong>Informe o nome do usuário:</strong></label>
			<input type="text" name="usu_nome" class="ml-2 form-control col-sm-4">
			<button name="localizar" class="ml-2 btn btn-light">Localizar</button>
		</div>
	</div>
</form>

<table class="table table-bordered w-100 mt-4">
	<thead>
		<tr>
			<th width="4%">Código</th>
			<th width="22%">Nome</th>
			<th width="31%">Email</th>
			<th width="25%">Login</th>
			<th colspan="2">Opções</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="6">Usuários cadastrados</td>
		</tr>
	</tfoot>
	<tbody>
	
		<?php foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $registro) : ?>
			<?php $link_excluir = './index.php?pg=usuario&op=excluir&cod=' . $registro->usu_cod; ?>
			<?php $link_alterar = './index.php?pg=usuario&op=alterar&cod=' . $registro->usu_cod; ?>
		
			<tr>
				<td class="<?= ($par) ? 'listaPar' : 'listaImpar' ?>">
					<?= $registro->usu_cod ?>
				</td>
				<td class="<?= ($par) ? 'listaPar' : 'listaImpar' ?>">
					<?= $registro->usu_nome ?>
				</td>
				<td class="<?= ($par) ? 'listaPar' : 'listaImpar' ?>">
					<?= $registro->usu_email ?>
				</td>
				<td class="<?= ($par) ? 'listaPar' : 'listaImpar' ?>">
					<?= $registro->usu_login ?>
				</td>
				<td width="6%" class="<?= ($par) ? 'listaPar' : 'listaImpar' ?>">
					<a href="<?= $link_alterar ?>">Alterar</a>
				</td>
				<td width="6%" class="<?= ($par) ? 'listaPar' : 'listaImpar' ?>">
					<a href="<?= $link_excluir ?>">Excluir</a>
				</td>
			</tr>

			<?php $par = !$par ?>
		<?php endforeach ?>
	</tbody>
</table>

<?php if (isset($flag) && !$flag) : ?>
	<p><?= $msg ?></p>
<?php endif ?>