<?php

	class Conexao
	{
		private $pdo;

		public function __construct($servidor = 'localhost', $usuario = 'root', $senha = '', 
			$nome_banco = 'minhaagenda')
		{
			$this->__set('servidor', $servidor);
			$this->__set('usuario', $usuario);
			$this->__set('senha', $senha);
			$this->__set('nome_banco', $nome_banco);
			$this->Conectar();
		}

		public function __set($atributo, $valor ) {
			$this->$atributo = $valor;
		}

		public function __get($atributo)
		{
			return $this->$atributo;
		}
		
		public function Conectar()
		{
			try {
				$this->pdo = new PDO(
					"mysql:dbname={$this->__get('nome_banco')};host={$this->__get('servidor')};charset=utf8",
					$this->__get('usuario'),
					$this->__get('senha')
				);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				die('Erro de conexão (' . $e->getMessage() . ')');
			}
		}
	}
