<?php 
$contato = new Contato ( );

// Inserir o contato
if ( isset ( $_POST['btinserir'] ) ) {
	$nome = $_POST['con_nome'];
	$rua = $_POST['con_rua'];
	$bairro = $_POST['con_bairro'];
	$complemento = $_POST['con_complemento'];
	$cidade = $_POST['con_cidade'];
	$estado = $_POST['con_estado'];
	$cep = $_POST['con_cep'];
	$email = $_POST['con_email'];
	$telefone = $_POST['con_telefone'];
	$celular = $_POST['con_celular'];
	$cod_usuario = $_POST['usu_cod'];
	
	$contato = new Contato ( 0, $nome, $email, $rua, $bairro, $complemento, $cidade, $cep, $estado, 
		$telefone, $celular, $cod_usuario );
	$con = new Conexao ( );
	$dal = new DalContato ( $con );
	$dal -> inserir ( $contato );
	$contato = new Contato ( );
}

// Alterar o contato
if ( isset ( $_POST['btalterar'] ) ) {
	$codigo = $_POST['con_cod'];
	$nome = $_POST['con_nome'];
	$rua = $_POST['con_rua'];
	$bairro = $_POST['con_bairro'];
	$complemento = $_POST['con_complemento'];
	$cidade = $_POST['con_cidade'];
	$estado = $_POST['con_estado'];
	$cep = $_POST['con_cep'];
	$email = $_POST['con_email'];
	$telefone = $_POST['con_telefone'];
	$celular = $_POST['con_celular'];
	$cod_usuario = $_POST['usu_cod'];

	$contato = new Contato ( $codigo, $nome, $email, $rua, $bairro, $complemento, $cidade, $cep, $estado, 
		$telefone, $celular, $cod_usuario );
	$con = new Conexao ( );
	$dal = new DalContato ( $con );
	$dal -> alterar ( $contato );
	$contato = new Contato ( );
}

// Excluir um registro
if ( isset ( $_GET['op'] ) AND $_GET['op'] == 'excluir' ) {
	$con = new Conexao ( );
	$dal = new DalContato ( $con );
	$flag = $dal -> excluir ( $_GET['cod'] );
	if ( !$flag ) {
		$msg = 'Não foi possível excluir o registro. O registro possui contatos cadastrados.';
		echo $msg;
	}
}

// Carregar um registro
if ( isset ( $_GET['op'] ) AND $_GET['op'] == 'alterar' ) {
	$con = new Conexao ( );
	$dal = new DalContato ( $con );
	$contato = $_GET['cod'];
	$contato = $dal -> carregarContato ( $contato );
	
}
?>
<form method="POST" action="index.php?pg=contato" class="col-sm-11">
	<div class="form-row">
		<div class="form-group col-sm-6" style="position: unset;">
			<label for="con_nome">Nome:</label>
			<input type="text" name="con_nome" value="<?php echo $contato -> getNome ( ); ?>"
				class="form-control">
		</div>
		<div class="form-group col-sm-6" style="position: unset;">
			<label for="con_rua">Endereço:</label>
			<input type="text" name="con_rua" value="<?php echo $contato -> getRua ( ); ?>"
				class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="con_bairro">Bairro:</label>
			<input type="text" name="con_bairro" value="<?php echo $contato -> getBairro ( ); ?>" 
				class="form-control">
		</div>
		<div class="form-group col-sm-6">
			<label for="con_complemento">Complemento:</label>
			<input type="text" name="con_complemento" value="<?php echo $contato -> getComplemento ( ); ?>"
				class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label for="con_cidade">Cidade:</label>
			<input type="text" name="con_cidade" value="<?php echo $contato -> getCidade ( ); ?>" 
				class="form-control">
		</div>
		<div class="form-group col-sm-2">
			<label for="con_estado">UF:</label>
			<input type="text" name="con_estado" value="<?php echo $contato -> getEstado ( ); ?>" 
				class="form-control">
		</div>
		<div class="form-group col-sm-4">
			<label for="con_cep">CEP:</label>
			<input type="text" name="con_cep" value="<?php echo $contato -> getCEP ( ); ?>"
				class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-sm-4">
			<label for="con_email">E-mail:</label>
			<input type="email" name="con_email" value="<?php echo $contato -> getEmail ( ); ?>" 
				class="form-control">
		</div>
		<div class="form-group col-sm-4">
			<label for="con_telefone">Telefone:</label>
			<input type="phone" name="con_telefone" value="<?php echo $contato -> getTelefone ( ); ?>" 
				class="form-control">
		</div>
		<div class="form-group col-sm-4">
			<label for="con_celular" class="ml-2">Celular:</label>
			<input type="phone" name="con_celular" value="<?php echo $contato -> getCelular ( ); ?>" 
				class="form-control">
		</div>
	</div>
	<div class="form-group col-sm-5">
		<label for="usu_cod">Selecionar Usuário:</label>
		<select name="usu_cod" class="form-control">
			<?php include_once 'estrutura/select_usuario.php'; ?>
		</select>
	</div>
	<?php  
	if ( $contato -> getCodigo ( ) == 0 ) { 
	?>
		<input type="submit" name="btinserir" value="Cadastrar" class="btn btn-success">
	<?php 
	} else { 
	?>
		<input type="submit" name="btalterar" value="Salvar">
		<input type="submit" name="btcancelar" value="Cancelar">
		<input type="hidden" name="con_cod" value="<?php echo $contato -> getCodigo ( ); ?>">
	<?php } ?>
</form>
<br>
<form method="POST">
	<div class="form-row col-sm-11">
		<label for="con_nome"><strong>Informe o nome do contato:</strong></label>
		<input type="text" name="con_nome" class="ml-2 form-control col-sm-4">
		<input type="submit" name="localizar" value="Localizar" class="ml-2 btn btn-light">
	</div>
</form>
<br>

<table width="100%" border="1">
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
	
	<?php
	// Buscar o nome para preencher o formulário
	$valor = ( isset ( $_POST['localizar'] ) ) ? $_POST['con_nome'] : '';
	$con = new Conexao ( );
	$dal = new DalContato ( $con );
	$resultado = $dal -> localizar ( $valor );
	$par = false;
	
	while ( $registro = $resultado -> fetch_assoc ( ) ) {
		$link_excluir = 'index.php?pg=contato&op=excluir&cod=' . $registro['con_cod'];
		$link_alterar = 'index.php?pg=contato&op=alterar&cod=' . $registro['con_cod'];
	?>
		<tr>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['con_cod'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['con_nome'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['con_email'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['con_telefone'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['con_celular'] ?>
			</td>
			<td width="6%" class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<a href="<?php echo $link_alterar; ?>">Alterar</a>
			</td>
			<td width="6%" class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<a href="<?php echo $link_excluir; ?>">Excluir</a>
			</td>
		</tr>
	<?php 
		$par = !$par;
	}
	?>
	</tbody>
</table>	