<?php  
class Usuario extends Pessoa {
	
	private $login;
	private $senha;

	function __construct ( $codigo = 0, $nome = '', $email = '', $login = '', $senha = '' ) {
		$this -> setCodigo ( $codigo );
		$this -> setNome ( $nome );
		$this -> setEmail ( $email );
		$this -> setLogin ( $login );
		$this -> setSenha ( $senha );
	}
	
	public function setLogin ( $valor ) {
		$this -> login = $valor;
	}

	public function getLogin ( ) {
		return $this -> login;
	}

	public function setSenha ( $valor ) {
		$this -> senha = $valor;
	}

	public function getSenha ( ) {
		return $this -> senha;
	}
}
?>