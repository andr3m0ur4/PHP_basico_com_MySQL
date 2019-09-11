<?php  
class Conexao {
	private $servidor;
	private $usuario;
	private $senha;
	private $nomeBanco;
	private $banco;

	public function __construct ( $servidor = 'localhost', $usuario = 'root', $senha = '', 
		$nomeBanco = 'agendaturbo' ) {

		$this -> setServidor ( $servidor );
		$this -> setUsuario ( $usuario );
		$this -> setSenha ( $senha );
		$this -> setNomeBanco ( $nomeBanco );
		$this -> Conectar ( );

	}

	public function setServidor ( $valor ) {
		$this -> servidor = $valor;
	}

	public function getServidor ( ) {
		return $this -> servidor;
	}

	public function setUsuario ( $valor ) {
		$this -> usuario = $valor;
	}

	public function getUsuario ( ) {
		return $this -> usuario;
	}

	public function setSenha ( $valor ) {
		$this -> senha = $valor;
	}

	public function getSenha ( ) {
		return $this -> senha;
	}

	public function setNomeBanco ( $valor ) {
		$this -> nomeBanco = $valor;
	}

	public function getNomeBanco ( ) {
		return $this -> nomeBanco;
	}
	
	public function Conectar ( ) {
		$this -> banco = new mysqli (
			$this -> getServidor ( ),
			$this -> getUsuario ( ),
			$this -> getSenha ( ),
			$this -> getNomeBanco ( )
		);
		if ( $this -> banco -> connect_error ) {
			die ( 'Erro de conexão (' . $this -> banco -> connect_errno . '): ' 
				. $this -> banco -> connect_error );
		}
	}

	public function getBanco ( ) {
		return $this -> banco;
	}

	public function Desconectar ( ) {
		$this -> banco -> close ( );
	}
}

?>