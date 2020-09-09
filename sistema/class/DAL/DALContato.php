<?php

	class DALContato
	{
		private $conexao;

		public function __construct($conexao)
		{
			$this->conexao = $conexao->__get('pdo');
		}

		public function inserir($contato)
		{
			$sql = 'INSERT INTO contato (
					con_nome, con_email, con_rua, con_bairro, con_complemento, con_cidade,
					con_estado, con_cep, con_telefone, con_celular, usu_cod
				) VALUES (
					:nome, :email, :rua, :bairro, :complemento, :cidade,
					:estado, :cep, :telefone, :celular, :cod_usuario
				)
			';
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':nome', $contato->__get('nome'));
			$stmt->bindValue(':email', $contato->__get('email'));
			$stmt->bindValue(':rua', $contato->__get('rua'));
			$stmt->bindValue(':bairro', $contato->__get('bairro'));
			$stmt->bindValue(':complemento', $contato->__get('complemento'));
			$stmt->bindValue(':cidade', $contato->__get('cidade'));
			$stmt->bindValue(':estado', $contato->__get('estado'));
			$stmt->bindValue(':cep', $contato->__get('cep'));
			$stmt->bindValue(':telefone', $contato->__get('telefone'));
			$stmt->bindValue(':celular', $contato->__get('celular'));
			$stmt->bindValue(':cod_usuario', $contato->__get('cod_usuario'));
			$stmt->execute();
		}

		public function alterar($contato)
		{
			$sql = 'UPDATE contato SET
					con_nome = :nome,
					con_email = :email, 
					con_rua = :rua, 
					con_bairro = :bairro, 
					con_complemento = :complemento,
					con_cidade = :cidade,
					con_estado = :estado,
					con_cep = :cep,
					con_telefone = :telefone,
					con_celular = :celular,
					usu_cod = :cod_usuario
				WHERE con_cod = :codigo
			';
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':nome', $contato->__get('nome'));
			$stmt->bindValue(':email', $contato->__get('email'));
			$stmt->bindValue(':rua', $contato->__get('rua'));
			$stmt->bindValue(':bairro', $contato->__get('bairro'));
			$stmt->bindValue(':complemento', $contato->__get('complemento'));
			$stmt->bindValue(':cidade', $contato->__get('cidade'));
			$stmt->bindValue(':estado', $contato->__get('estado'));
			$stmt->bindValue(':cep', $contato->__get('cep'));
			$stmt->bindValue(':telefone', $contato->__get('telefone'));
			$stmt->bindValue(':celular', $contato->__get('celular'));
			$stmt->bindValue(':cod_usuario', $contato->__get('cod_usuario'));
			$stmt->bindValue(':codigo', $contato->__get('codigo'));
			$stmt->execute();
		}

		public function excluir($codigo)
		{
			$sql = 'DELETE FROM contato WHERE con_cod = :codigo';
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':codigo', $codigo);
			$resultado = $stmt->execute();
			
			return $resultado;
		}

		public function localizar($nome = '')
		{
			$sql = 'SELECT * FROM contato WHERE con_nome LIKE :nome';
			$stmt =  $this->conexao->prepare($sql);
			$stmt->bindValue(':nome', "%$nome%");
			$stmt->execute();
			
			return $stmt;
		}

		public function carregarContato($codigo)
		{
			$sql = 'SELECT * FROM contato WHERE con_cod = :codigo';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':codigo', $codigo);
			$stmt->execute();
			$registro = $stmt->fetch(PDO::FETCH_OBJ);
			$contato = new Contato(
				$registro->con_cod, $registro->con_nome, $registro->con_email, $registro->con_rua,
				$registro->con_bairro, $registro->con_complemento, $registro->con_cidade,
				$registro->con_cep, $registro->con_estado, $registro->con_telefone,
				$registro->con_celular, $registro->usu_cod
			);
			
			return $contato;
		}
	}
