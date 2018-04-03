<?php

	class ProdutoHasProduto
	{
		private $produtoIdProduto;
		private $produtoIdProduto1;

		public function getProdutoIdProduto(){
			return $this->produtoIdProduto;
		}

		public function setProdutoIdProduto($produtoIdProduto){
			$this->produtoIdProduto = $produtoIdProduto;
		}

		public function getProdutoIdProduto1(){
			return $this->produtoIdProduto1;
		}

		public function setProdutoIdProduto1($produtoIdProduto1){
			$this->produtoIdProduto1 = $produtoIdProduto1;
		}

	}
?>