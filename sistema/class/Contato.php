<?php

	class Contato extends Pessoa
	{
		function __construct($codigo = 0, $nome = '', $email = '', $rua = '', $bairro = '', $complemento = '',
			$cidade = '', $cep = '', $estado = '', $telefone = '', $celular = '', $cod_usuario = 0 ) {
			$this->__set('codigo', $codigo);
			$this->__set('nome', $nome);
			$this->__set('email', $email);
			$this->__set('rua', $rua);
			$this->__set('bairro', $bairro);
			$this->__set('complemento', $complemento);
			$this->__set('cidade', $cidade);
			$this->__set('cep', $cep);
			$this->__set('estado', $estado);
			$this->__set('telefone', $telefone);
			$this->__set('celular', $celular);
			$this->__set('cod_usuario', $cod_usuario);
		}

		public function __set($atributo, $valor ) {
			$this->$atributo = $valor;
		}

		public function __get($atributo)
		{
			return $this->$atributo;
		}
	}
