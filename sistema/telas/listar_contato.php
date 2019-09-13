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
<form method="POST" action="index.php?pg=contato">
	<p>
		<label for="con_nome">Nome:</label>
		<input type="text" name="con_nome" size="100" value="<?php echo $contato -> getNome ( ); ?>">
	</p>
	<p>
		<label for="con_rua">Endereço:</label>
		<input type="text" name="con_rua" size="100" value="<?php echo $contato -> getRua ( ); ?>">
	</p>
	<p>
		<label for="con_bairro">Bairro:</label>
		<input type="text" name="con_bairro" size="50" value="<?php echo $contato -> getBairro ( ); ?>">
		<label for="con_complemento">Complemento:</label>
		<input type="text" name="con_complemento" size="50" value="<?php echo $contato -> getComplemento ( ); ?>">
	</p>
	<p>
		<label for="con_cidade">Cidade:</label>
		<input type="text" name="con_cidade" size="50" value="<?php echo $contato -> getCidade ( ); ?>">
		<label for="con_estado">UF:</label>
		<input type="text" name="con_estado" size="5" value="<?php echo $contato -> getEstado ( ); ?>">
		<label for="con_cep">CEP:</label>
		<input type="text" name="con_cep" size="30" value="<?php echo $contato -> getCEP ( ); ?>">
	</p>
	<p>
		<label for="con_email">E-mail:</label>
		<input type="email" name="con_email" size="100" value="<?php echo $contato -> getEmail ( ); ?>">
	</p>
	<p>
		<label for="con_telefone">Telefone:</label>
		<input type="phone" name="con_telefone" size="30" value="<?php echo $contato -> getTelefone ( ); ?>">
		<label for="con_celular">Celular:</label>
		<input type="phone" name="con_celular" size="30" value="<?php echo $contato -> getCelular ( ); ?>">
		<label for="usu_cod">Código do Usuário:</label>
		<input type="text" name="usu_cod" size="5" value="<?php echo $contato -> getCodUsuario ( ); ?>">
		<?php  
		if ( $contato -> getCodigo ( ) == 0 ) { 
		?>
			<input type="submit" name="btinserir" value="Cadastrar">
		<?php 
		} else { 
		?>
			<input type="submit" name="btalterar" value="Salvar">
			<input type="submit" name="btcancelar" value="Cancelar">
			<input type="hidden" name="con_cod" value="<?php echo $contato -> getCodigo ( ); ?>">
		<?php } ?>
	</p>
</form>
<br>
<form method="POST">
	<label for="con_nome">Informe o nome do contato:</label>
	<input type="text" name="con_nome">
	<input type="submit" name="localizar" value="Localizar">
</form>
<br>

<table width="100%" border="1">
	<tr>
		<th width="4%">Código</th>
		<th width="22%">Nome</th>
		<th width="31%">Email</th>
		<th width="25%">Telefone</th>
		<th width="25%">Celular</th>
		<th colspan="2">Opções</th>
	</tr>
	<?php
	// Buscar o nome para preencher o formulário
	$valor = ( isset ( $_POST['localizar'] ) ) ? $_POST['con_nome'] : '';
	$con = new Conexao ( );
	$dal = new DalContato ( $con );
	$resultado = $dal -> localizar ( $valor );
	
	while ( $registro = $resultado -> fetch_assoc ( ) ) {
		$link_excluir = 'index.php?pg=contato&op=excluir&cod=' . $registro['con_cod'];
		$link_alterar = 'index.php?pg=contato&op=alterar&cod=' . $registro['con_cod'];
	?>
		<tr>
			<td><?php echo $registro['con_cod'] ?></td>
			<td><?php echo $registro['con_nome'] ?></td>
			<td><?php echo $registro['con_email'] ?></td>
			<td><?php echo $registro['con_telefone'] ?></td>
			<td><?php echo $registro['con_celular'] ?></td>
			<td width="6%"><a href="<?php echo $link_alterar; ?>">Alterar</a></td>
			<td width="6%"><a href="<?php echo $link_excluir; ?>">Excluir</a></td>
		</tr>
	<?php } ?>
</table>	