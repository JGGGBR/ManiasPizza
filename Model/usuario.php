<?php

	class Usuario
	{
		private $idUsuario;
		private $nome;
		private $sobrenome;
		private $cpf;
		private $email;
		private $senha;
		private $tipoUsuario;
		private $status;
		private $endereco_IdEndereco;

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getSobrenome(){
			return $this->sobrenome;
		}

		public function setSobrenome($sobrenome){
			$this->sobrenome = $sobrenome;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function setCpf($cpf){
			$this->cpf = $cpf;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}

		public function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}

		public function getEndereco_IdEndereco(){
			return $this->endereco_IdEndereco;
		}

		public function setEndereco_IdEndereco($endereco_IdEndereco){
			$this->endereco_IdEndereco = $endereco_IdEndereco;
		}

		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}

		
	}

?>