<?php

	class DALUsuario
	{
		private $conexao;

		public function __construct($conexao)
		{
			$this->conexao = $conexao->__get('pdo');
		}

		public function inserir($usuario)
		{
			$sql = 'INSERT INTO usuario (usu_nome, usu_email, usu_login, usu_senha)
				VALUES (:usu_nome, :usu_email, :usu_login, :usu_senha)';

			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':usu_nome', $usuario->__get('nome'));
			$stmt->bindValue(':usu_email', $usuario->__get('email'));
			$stmt->bindValue(':usu_login', $usuario->__get('login'));
			$stmt->bindValue(':usu_senha', $usuario->__get('senha'));
			$stmt->execute();
		}

		public function alterar($usuario)
		{
			$sql = 'UPDATE usuario SET
					usu_nome = :nome,
					usu_email = :email,
					usu_login = :login,
					usu_senha = :senha
				WHERE usu_cod = :codigo';
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':nome', $usuario->__get('nome'));
			$stmt->bindValue(':email', $usuario->__get('email'));
			$stmt->bindValue(':login', $usuario->__get('login'));
			$stmt->bindValue(':senha', $usuario->__get('senha'));
			$stmt->bindValue(':codigo', $usuario->__get('codigo'));
			$stmt->execute();
		}

		public function excluir($codigo)
		{
			$sql = 'DELETE FROM usuario WHERE usu_cod = :codigo';
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':codigo', $codigo);
			$stmt->execute();
			
			return $stmt;
		}

		public function localizar($nome = '')
		{
			$sql = 'SELECT * FROM usuario WHERE usu_nome LIKE :nome';
			$stmt =  $this->conexao->prepare($sql);
			$stmt->bindValue(':nome', "%$nome%");
			$stmt->execute();
			
			return $stmt;
		}

		public function carregarUsuario($codigo)
		{
			$sql = 'SELECT * FROM usuario WHERE usu_cod = :codigo';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':codigo', $codigo);
			$stmt->execute();
			$registro = $stmt->fetch(PDO::FETCH_OBJ);
			$usuario = new Usuario(
				$registro->usu_cod, $registro->usu_nome, $registro->usu_email,
				$registro->usu_login, $registro->usu_senha
			);
			
			return $usuario;
		}

		public function verificarLogin($usuario = '', $senha = '')
		{
			$sql = 'SELECT * FROM usuario WHERE usu_login = :usuario AND usu_senha = :senha';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':usuario', $usuario);
			$stmt->bindValue(':senha', $senha);
			$stmt->execute();
			
			if ($stmt->rowCount() == 1 ) {
				return true;
			} else {
				return false;
			}
		}
	}
