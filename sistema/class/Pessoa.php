<?php

	class Pessoa
	{	
		function __construct($codigo = 0, $nome = '', $email = '')
		{
			$this->__set('codigo', $codigo);
			$this->__set('nome', $nome);
			$this->__set('email', $email);
		}

		public function __set($atributo, $valor ) {
			$this->$atributo = $valor;
		}

		public function __get($atributo)
		{
			return $this->$atributo;
		}
	}
	