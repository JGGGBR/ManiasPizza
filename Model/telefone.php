<?php

	class Telefone
	{
		private $idTelefone;
		private $telefone;
		private $telefoneMovel;
		private $usuarioIdUsuario;

		public function getIdTelefone(){
			return $this->idTelefone;
		}

		public function setIdTelefone($idTelefone){
			$this->idTelefone = $idTelefone;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		public function getTelefoneMovel(){
			return $this->telefoneMovel;
		}

		public function setTelefoneMovel($telefoneMovel){
			$this->telefoneMovel = $telefoneMovel;
		}

		public function getUsuarioIdUsuario(){
			return $this->usuarioIdUsuario;
		}

		public function setUsuarioIdUsuario($usuarioIdUsuario){
			$this->usuarioIdUsuario = $usuarioIdUsuario;
		}

	}
?>