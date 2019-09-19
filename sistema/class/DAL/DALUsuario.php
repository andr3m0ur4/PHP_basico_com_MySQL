<?php  
class DALUsuario {
	private $conexao;

	public function __construct ( $conexao ) {
		$this -> conexao = $conexao;
	}

	public function inserir ( $usuario ) {
		$sql = "INSERT INTO usuario ( usu_nome, usu_email, usu_login, usu_senha ) VALUES ( '" . 
			$usuario -> getNome ( ) . "', '" .
			$usuario -> getEmail ( ) . "', '" .
			$usuario -> getLogin ( ) . "', '" .
			$usuario -> getSenha ( ) . "' ) ";
		//echo $sql;
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
	}

	public function alterar ( $usuario ) {
		$sql = "UPDATE usuario SET usu_nome = '{$usuario -> getNome ( )}', 
			usu_email = '{$usuario -> getEmail ( )}', 
			usu_login = '{$usuario -> getLogin ( )}', 
			usu_senha = '{$usuario -> getSenha ( )}' 
			WHERE usu_cod = {$usuario -> getCodigo ( )}";
		//echo $sql;
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
	}

	public function excluir ( $codigo ) {
		$sql = "DELETE FROM usuario WHERE usu_cod = {$codigo}";
		//echo $sql;
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$retorno = $banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
		return $retorno;
	}

	public function localizar ( $nome = '' ) {
		$sql = "SELECT * FROM usuario WHERE usu_nome LIKE '%{$nome}%'";
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$retorno = $banco -> query ( $sql );
		//for ( $set = array ( ); $row = $retorno -> fetch_assoc ( ); $set[] = $row );
		$this -> conexao -> Desconectar ( );
		return $retorno;
	}

	public function carregarUsuario ( $codigo ) {
		$sql = "SELECT * FROM usuario WHERE usu_cod = {$codigo}";
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$resultado = $banco -> query ( $sql );
		$registro = $resultado -> fetch_assoc ( );
		$usuario = new Usuario ( $registro['usu_cod'], $registro['usu_nome'], $registro['usu_email'], 
			$registro['usu_login'], $registro['usu_senha'] );
		$this -> conexao -> Desconectar ( );
		return $usuario;
	}

	public function verificarLogin ( $usuario = '', $senha = '' ) {
		$sql = "SELECT * FROM usuario WHERE usu_login = '{$usuario}' AND usu_senha = '{$senha}'";
		$this -> conexao -> Conectar ( );
		$banco = $this -> conexao -> getBanco ( );
		$consulta = $banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
		if ( $consulta -> num_rows == 1 ) {
			return true;
		} else {
			return false;
		}
	}
}
?>