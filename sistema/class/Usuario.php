<?php

	class Usuario extends Pessoa
	{
		function __construct ($codigo = 0, $nome = '', $email = '', $login = '', $senha = '')
		{
			$this->__set('codigo', $codigo);
			$this->__set('nome', $nome);
			$this->__set('email', $email);
			$this->__set('login', $login);
			$this->__set('senha', $senha);
		}

		public function __set($atributo, $valor)
		{
			$this->$atributo = $valor;
		}

		public function __get($atributo)
		{
			return $this->$atributo;
		}
	}
