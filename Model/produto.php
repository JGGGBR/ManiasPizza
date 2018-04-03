<?php

	class Produto
	{
		private $idProduto;
		private $preco;
		private $nome;
		private $categoria;
		private $sabor;
		private $tamanho;
		private $maxQtdSabor;
		private $status;
		private $borda;

		public function getIdProduto(){
			return $this->idProduto;
		}

		public function setIdProduto($idProduto){
			$this->idProduto = $idProduto;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($preco){
			$this->preco = $preco;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}

		public function getSabor(){
			return $this->sabor;
		}

		public function setSabor($sabor){
			$this->sabor = $sabor;
		}

		public function getTamanho(){
			return $this->tamanho;
		}

		public function setTamanho($tamanho){
			$this->tamanho = $tamanho;
		}

		public function getMaxQtdSabor(){
			return $this->maxQtdSabor;
		}

		public function setMaxQtdSabor($maxQtdSabor){
			$this->maxQtdSabor = $maxQtdSabor;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}

		public function getBorda(){
			return $this->borda;
		}

		public function setBorda($borda){
			$this->borda = $borda;
		}

	}
?>