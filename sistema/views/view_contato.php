<form method="POST" action="./index.php?pg=contato" class="col-sm-11">
	<div class="form-row">
		<div class="form-group col-sm-6" style="position: unset;">
			<label for="con_nome">Nome:</label>
			<input type="text" name="con_nome" value="<?= $contato->__get('nome') ?>" class="form-control">
		</div>
		<div class="form-group col-sm-6" style="position: unset;">
			<label for="con_rua">Endereço:</label>
			<input type="text" name="con_rua" value="<?= $contato->__get('rua') ?>"	class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="con_bairro">Bairro:</label>
			<input type="text" name="con_bairro" value="<?= $contato->__get('bairro') ?>" class="form-control">
		</div>
		<div class="form-group col-sm-6">
			<label for="con_complemento">Complemento:</label>
			<input type="text" name="con_complemento" value="<?= $contato->__get('complemento') ?>" class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="con_cidade">Cidade:</label>
			<input type="text" name="con_cidade" value="<?= $contato->__get('cidade') ?>" class="form-control">
		</div>
		<div class="form-group col-sm-2">
			<label for="con_estado">UF:</label>
			<input type="text" name="con_estado" value="<?= $contato->__get('estado') ?>" class="form-control">
		</div>
		<div class="form-group col-sm-4">
			<label for="con_cep">CEP:</label>
			<input type="text" name="con_cep" value="<?= $contato->__get('cep') ?>"	class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-sm-4">
			<label for="con_email">E-mail:</label>
			<input type="email" name="con_email" value="<?= $contato->__get('email') ?>" class="form-control">
		</div>
		<div class="form-group col-sm-4">
			<label for="con_telefone">Telefone:</label>
			<input type="phone" name="con_telefone" value="<?= $contato->__get('telefone') ?>" class="form-control">
		</div>
		<div class="form-group col-sm-4">
			<label for="con_celular" class="ml-2">Celular:</label>
			<input type="phone" name="con_celular" value="<?= $contato->__get('celular') ?>" class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-5">
		<label for="usu_cod">Selecionar Usuário:</label>
		<select name="usu_cod" class="form-control">
			<?php include_once './estrutura/select_usuario.php' ?>
		</select>
	</div>

	<?php if ($contato->__get('codigo') == 0) : ?>
        <button class="btn btn-success" name="btinserir">Cadastrar</button>
    <?php else : ?>
        <button name="btalterar" class="btn btn-success">Salvar</button>
        <button name="btcancelar" class="btn btn-secondary">Cancelar</button>
		<input type="hidden" name="con_cod" value="<?= $contato->__get('codigo') ?>">
	<?php endif ?>
</form>

<form method="POST" class="mt-4">
	<div class="form-row col-sm-11">
		<label for="con_nome"><strong>Informe o nome do contato:</strong></label>
        <input type="text" name="con_nome" class="ml-2 form-control col-sm-4">
        <button name="localizar" class="ml-2 btn btn-light">Localizar</button>
	</div>
</form>

<table class="table table-bordered w-100 mt-4">
	<thead>
		<tr>
			<th width="4%">Código</th>
			<th width="22%">Nome</th>
			<th width="31%">Email</th>
			<th width="25%">Telefone</th>
			<th width="25%">Celular</th>
			<th colspan="2">Opções</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="7">Contatos cadastrados</td>
		</tr>
	</tfoot>
	<tbody>
	
        <?php foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $registro) : ?>
            <?php $link_excluir = './index.php?pg=contato&op=excluir&cod=' . $registro->con_cod ?>
            <?php $link_alterar = './index.php?pg=contato&op=alterar&cod=' . $registro->con_cod ?>

            <tr>
                <td class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <?= $registro->con_cod ?>
                </td>
                <td class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <?= $registro->con_nome ?>
                </td>
                <td class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <?= $registro->con_email ?>
                </td>
                <td class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <?= $registro->con_telefone ?>
                </td>
                <td class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <?= $registro->con_celular ?>
                </td>
                <td width="6%" class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <a href="<?= $link_alterar ?>">Alterar</a>
                </td>
                <td width="6%" class="<?= $par ? 'listaPar' : 'listaImpar' ?>">
                    <a href="<?= $link_excluir ?>">Excluir</a>
                </td>
            </tr>
            <?php $par = !$par ?>
        <?php endforeach ?>
	</tbody>
</table>