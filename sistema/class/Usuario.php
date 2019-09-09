<?php  
class Usuario {
	private $codigo;
	private $nome;
	private $email;
	private $login;
	private $senha;

	function __construct ( $codigo = 0, $nome = '', $email = '', $login = '', $senha = '' ) {
		$this -> setCodigo ( $codigo );
		$this -> setNome ( $nome );
		$this -> setEmail ( $email );
		$this -> setLogin ( $login );
		$this -> setSenha ( $senha );
	}

	public function setCodigo ( $valor ) {
		$this -> codigo = $valor;
	}

	public function getCodigo ( ) {
		return $this -> codigo;
	}

	public function setNome ( $valor ) {
		$this -> nome = $valor;
	}

	public function getNome ( ) {
		return $this -> nome;
	}

	public function setEmail ( $valor ) {
		$this -> email = $valor;
	}

	public function getEmail ( ) {
		return $this -> email;
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