<?php  
class Pessoa {
	private $codigo;
	private $nome;
	private $email;
	
	function __construct ( $codigo = 0, $nome = '', $email = '' ) {
		$this -> setCodigo ( $codigo );
		$this -> setNome ( $nome );
		$this -> setEmail ( $email );
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
	
}
?>