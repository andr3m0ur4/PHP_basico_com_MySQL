<?php  
$usuario = new Usuario ( );

// Inserir o usuário
if ( isset ( $_POST['btinserir'] ) ) {
	$nome = $_POST['usu_nome'];
	$email = $_POST['usu_email'];
	$login = $_POST['usu_login'];
	$senha = $_POST['usu_senha'];

	$usuario = new Usuario ( 0, $nome, $email, $login, $senha );
	$con = new Conexao ( );
	$dal = new DALUsuario ( $con );
	$dal -> inserir ( $usuario );
	$usuario = new Usuario ( );
}

// Alterar o usuário
if ( isset ( $_POST['btalterar'] ) ) {
	$codigo = $_POST['usu_cod'];
	$nome = $_POST['usu_nome'];
	$email = $_POST['usu_email'];
	$login = $_POST['usu_login'];
	$senha = $_POST['usu_senha'];

	$usuario = new Usuario ( $codigo, $nome, $email, $login, $senha );
	$con = new Conexao ( );
	$dal = new DALUsuario ( $con );
	$dal -> alterar ( $usuario );
	$usuario = new Usuario ( );
}

// Excluir um registro
if ( isset ( $_GET['op'] ) AND $_GET['op'] == 'excluir' ) {
	$con = new Conexao ( );
	$dal = new DALUsuario ( $con );
	$flag = $dal -> excluir ( $_GET['cod'] );
	if ( !$flag ) {
		$msg = 'Não foi possível excluir o registro. O registro possui contatos cadastrados.';
		echo $msg;
	}
}

// Carregar um registro
if ( isset ( $_GET['op'] ) AND $_GET['op'] == 'alterar' ) {
	$con = new Conexao ( );
	$dal = new DALUsuario ( $con );
	$usuario = $_GET['cod'];
	$usuario = $dal -> carregarUsuario ( $usuario );
	
}
?>
<form method="POST" action="index.php?pg=usuario">
	<table width="100%" border="0">
		<tr>
			<th class="legenda">
				<label for="usu_nome">Nome:</label>
			</th>
			<td>
				<input type="text" name="usu_nome" size="100" value="<?php echo $usuario -> getNome ( ); ?>"
					class="form-control col-sm-8" style="position: unset;">
			</td>
		</tr>
		<tr>
			<th class="legenda">
				<label for="usu_email">E-mail:</label>
			</td>
			<td>
				<input type="email" name="usu_email" size="100" 
					value="<?php echo $usuario -> getEmail ( ); ?>" class="form-control col-sm-8">
			</td>
		</tr>
		<tr>
			<th class="legenda">
				<label for="usu_login">Login:</label>
			</th>
			<td>
				<input type="text" name="usu_login" size="42" value="<?php echo $usuario -> getLogin ( ); ?>"
					class="form-control col-sm-8">
			</td>
		</tr>
		<tr>
			<th class="legenda">
				<label for="usu_nome">Senha:</label>
			</th>
			<td>
				<input type="password" name="usu_senha" size="42" 
					value="<?php echo $usuario -> getSenha ( ); ?>" class="form-control col-sm-8">
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td><br>
				<?php  
				if ( $usuario -> getCodigo ( ) == 0 ) { 
				?>
					<input type="submit" name="btinserir" value="Cadastrar" class="btn btn-success">
				<?php 
				} else { 
				?>
					<input type="submit" name="btalterar" value="Salvar" class="btn btn-success">
					<input type="submit" name="btcancelar" value="Cancelar" class="btn btn-secondary">
					<input type="hidden" name="usu_cod" value="<?php echo $usuario -> getCodigo ( ); ?>">
				<?php } ?>
			</td>
		</tr>
	</table>
</form>
<br>
<form method="POST">
	<div class="form-row">
		<label for="usu_nome"><strong>Informe o nome do usuário:</strong></label>
		<input type="text" name="usu_nome" class="ml-2 form-control col-sm-4">
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
	
	<?php  
	$valor = ( isset ( $_POST['localizar'] ) ) ? $_POST['usu_nome'] : '';
	$con = new Conexao ( );
	$dal = new DalUsuario ( $con );
	$resultado = $dal -> localizar ( $valor );
	$par = false;
	
	while ( $registro = $resultado -> fetch_assoc ( ) ) {
		$link_excluir = 'index.php?pg=usuario&op=excluir&cod=' . $registro['usu_cod'];
		$link_alterar = 'index.php?pg=usuario&op=alterar&cod=' . $registro['usu_cod'];
	?>
		<tr>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['usu_cod'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['usu_nome'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['usu_email'] ?>
			</td>
			<td class="<?php echo ( $par ) ? 'listaPar' : 'listaImpar'; ?>">
				<?php echo $registro['usu_login'] ?>
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