<?php  
class DALContato {
	private $conexao;

	public function __construct ( $conexao ) {
		$this -> conexao = $conexao;
	}

	public function inserir ( $contato ) {
		$sql = "INSERT INTO contato ( con_nome, con_email, con_rua, con_bairro, con_complemento, con_cidade,
			con_estado, con_cep, con_telefone, con_celular, usu_cod ) VALUES ( '" . 
			$contato -> getNome ( ) . "', '" .
			$contato -> getEmail ( ) . "', '" .
			$contato -> getRua ( ) . "', '" .
			$contato -> getBairro ( ) . "', '" .
			$contato -> getComplemento ( ) . "', '" .
			$contato -> getCidade ( ) . "', '" .
			$contato -> getEstado ( ) . "', '" .
			$contato -> getCEP ( ) . "', '" .
			$contato -> getTelefone ( ) . "', '" .
			$contato -> getCelular ( ) . "', " .
			$contato -> getCodUsuario ( ) . " ) ";
		//echo $sql;
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
	}

	public function alterar ( $contato ) {
		$sql = "UPDATE contato SET con_nome = '{$contato -> getNome ( )}', 
			con_email = '{$contato -> getEmail ( )}', 
			con_rua = '{$contato -> getRua ( )}', 
			con_bairro = '{$contato -> getBairro ( )}', 
			con_complemento = '{$contato -> getComplemento ( )}',
			con_cidade = '{$contato -> getCidade ( )}',
			con_estado = '{$contato -> getEstado ( )}',
			con_cep = '{$contato -> getCEP ( )}',
			con_telefone = '{$contato -> getTelefone ( )}',
			con_celular = '{$contato -> getCelular ( )}',
			usu_cod = '{$contato -> getCodUsuario ( )}'
			WHERE con_cod = {$contato -> getCodigo ( )}";
		//echo $sql;
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
	}

	public function excluir ( $codigo ) {
		$sql = "DELETE FROM contato WHERE con_cod = {$codigo}";
		//echo $sql;
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$retorno = $banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
		return $retorno;
	}

	public function localizar ( $nome = '' ) {
		$sql = "SELECT * FROM contato WHERE con_nome LIKE '%{$nome}%'";
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$retorno = $banco -> query ( $sql );
		//for ( $set = array ( ); $row = $retorno -> fetch_assoc ( ); $set[] = $row );
		$this -> conexao -> Desconectar ( );
		return $retorno;
	}

	public function carregarContato ( $codigo ) {
		$sql = "SELECT * FROM contato WHERE con_cod = {$codigo}";
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$resultado = $banco -> query ( $sql );
		$registro = $resultado -> fetch_assoc ( );
		$contato = new Contato ( $registro['con_cod'], $registro['con_nome'], $registro['con_email'], 
			$registro['con_rua'], $registro['con_bairro'], $registro['con_complemento'], 
			$registro['con_cidade'], $registro['con_cep'], $registro['con_estado'], $registro['con_telefone'],
			$registro['con_celular'], $registro['usu_cod'] );
		$this -> conexao -> Desconectar ( );
		return $contato;
	}
}
?>