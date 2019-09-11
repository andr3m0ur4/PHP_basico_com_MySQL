<?php  
class DALUsuario {
	private $conexao;

	public function __construct ( $conexao ) {
		$this -> conexao = $conexao;
	}

	public function inserir ( $usuario ) {
		$sql = "INSERT INTO usuario (usu_nome, usu_email, usu_login, usu_senha) VALUES ('" . 
			$usuario -> getNome ( ) . "', '" .
			$usuario -> getEmail ( ) . "', '" .
			$usuario -> getLogin ( ) . "', '" .
			$usuario -> getSenha ( ) . "')";
		//echo $sql;
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
		$banco = $this -> conexao -> getBanco ( );
		$banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
	}

	public function excluir ( $codigo ) {
		$sql = "DELETE FROM usuario WHERE usu_cod = {$codigo}";
		//echo $sql;
		$banco = $this -> conexao -> getBanco ( );
		$banco -> query ( $sql );
		$this -> conexao -> Desconectar ( );
	}

	public function localizar ( $nome = '' ) {
		$sql = "SELECT * FROM usuario WHERE usu_nome LIKE '%{$nome}%'";
		$banco = $this -> conexao -> getBanco ( );
		$retorno = $banco -> query ( $sql );
		//for ( $set = array ( ); $row = $retorno -> fetch_assoc ( ); $set[] = $row );
		$this -> conexao -> Desconectar ( );
		return $retorno;
	}
}
?>