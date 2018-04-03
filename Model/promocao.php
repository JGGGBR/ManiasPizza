<?php

	class Promocao
	{
		private $idPromocao;
		private $nome;
		private $requerimentos;
		private $dataIn;
		private $dataF;
		private $porcDescont;

		public function getIdPromocao(){
			return $this->idPromocao;
		}

		public function setIdPromocao($idPromocao){
			$this->idPromocao = $idPromocao;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getRequerimentos(){
			return $this->requerimentos;
		}

		public function setRequerimentos($requerimentos){
			$this->requerimentos = $requerimentos;
		}

		public function getDataIn(){
			return $this->dataIn;
		}

		public function setDataIn($dataIn){
			$this->dataIn = $dataIn;
		}

		public function getDataF(){
			return $this->dataF;
		}

		public function setDataF($dataF){
			$this->dataF = $dataF;
		}

		public function getPorcDescont(){
			return $this->porcDescont;
		}

		public function setPorcDescont($porcDescont){
			$this->porcDescont = $porcDescont;
		}

	}
?>