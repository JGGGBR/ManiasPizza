<?php

	class Funcionario
	{
		private $idFuncionario;
		private $salario;
		private $usuarioIdUsuario;
		private $valorFiado;
		private $folgaIdFolga;

		public function getIdFuncionario(){
			return $this->idFuncionario;
		}

		public function setIdFuncionario($idFuncionario){
			$this->idFuncionario = $idFuncionario;
		}

		public function getSalario(){
			return $this->salario;
		}

		public function setSalario($salario){
			$this->salario = $salario;
		}

		public function getUsuarioIdUsuario(){
			return $this->usuarioIdUsuario;
		}

		public function setUsuarioIdUsuario($usuarioIdUsuario){
			$this->usuarioIdUsuario = $usuarioIdUsuario;
		}

		public function getValorFiado(){
			return $this->valorFiado;
		}

		public function setValorFiado($valorFiado){
			$this->valorFiado = $valorFiado;
		}

		public function getFolgaIdFolga(){
			return $this->folgaIdFolga;
		}

		public function setFolgaIdFolga($folgaIdFolga){
			$this->folgaIdFolga = $folgaIdFolga;
		}

	}
?>