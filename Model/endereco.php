<?php

	class Endereco
	{
		private $idEndereco;
		private $rua;
		private $bairro;
		private $numeroResidencia;
		private $cidade;
		private $estado;
		private $ponto_ref;
		private $cep;

		public function getIdEndereco(){
			return $this->idEndereco;
		}

		public function setIdEndereco($idEndereco){
			$this->idEndereco = $idEndereco;
		}

		public function getRua(){
			return $this->rua;
		}

		public function setRua($rua){
			$this->rua = $rua;
		}

		public function getBairro(){
			return $this->bairro;
		}

		public function setBairro($bairro){
			$this->bairro = $bairro;
		}

		public function getNumeroResidencia(){
			return $this->numeroResidencia;
		}

		public function setNumeroResidencia($numeroResidencia){
			$this->numeroResidencia = $numeroResidencia;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function setCidade($cidade){
			$this->cidade = $cidade;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function setEstado($estado){
			$this->estado = $estado;
		}

		public function getPonto_ref(){
			return $this->ponto_ref;
		}

		public function setPonto_ref($ponto_ref){
			$this->ponto_ref = $ponto_ref;
		}

		public function getCep(){
			return $this->cep;
		}

		public function setCep($cep){
			$this->cep = $cep;
		}

	}
?>