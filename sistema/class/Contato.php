<?php  
class Contato extends Pessoa {
	// cod, nome, email
	private $rua;
	private $bairro;
	private $complemento;
	private $cidade;
	private $cep;
	private $estado;
	private $telefone;
	private $celular;
	private $cod_usuario;

	function __construct ( $codigo = 0, $nome = '', $email = '', $rua = '', $bairro = '', $complemento = '',
		$cidade = '', $cep = '', $estado = '', $telefone = '', $celular = '', $cod_usuario = 0 ) {
		$this -> setCodigo ( $codigo );
		$this -> setNome ( $nome );
		$this -> setEmail ( $email );
		$this -> setRua ( $rua );
		$this -> setBairro ( $bairro );
		$this -> setComplemnto ( $complemento );
		$this -> setCidade ( $cidade );
		$this -> setCEP ( $cep );
		$this -> setEstado ( $estado );
		$this -> setTelefone ( $telefone );
		$this -> setCelular ( $celular );
		$this -> setCodUsuario ( $cod_usuario );
	}

	public function setBairro ( $valor ) {
		$this -> bairro = $valor;
	}

	public function getBairro ( ) {
		return $this -> bairro;
	}

	public function setCEP ( $valor ) {
		$this -> cep = $valor;
	}

	public function getCEP ( ) {
		return $this -> cep;
	}

	public function setCidade ( $valor ) {
		$this -> cidade = $valor;
	}

	public function getCidade ( ) {
		return $this -> cidade;
	}

	public function setComplemnto ( $valor ) {
		$this -> complemento = $valor;
	}

	public function getComplemento ( ) {
		return $this -> complemento;
	}

	public function setEstado ( $valor ) {
		$this -> estado = $valor;
	}

	public function getEstado ( ) {
		return $this -> estado;
	}

	public function setTelefone ( $valor ) {
		$this -> telefone = $valor;
	}

	public function getTelefone ( ) {
		return $this -> telefone;
	}

	public function setCelular ( $valor ) {
		$this -> celular = $valor;
	}

	public function getCelular ( ) {
		return $this -> celular;
	}

	public function setRua ( $valor ) {
		$this -> rua = $valor;
	}

	public function getRua ( ) {
		return $this -> rua;
	}

	public function setCodUsuario ( $valor ) {
		$this -> cod_usuario = $valor;
	}

	public function getCodUsuario ( ) {
		return $this -> cod_usuario;
	}
}
?>