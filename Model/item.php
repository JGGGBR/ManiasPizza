<?php

	class Item
	{
		private $idItem;
		private $pedidoIdPedido;
		private $Qtd;
		private $valorParcial;
		private $produtoIdProduto;

		public function getIdItem(){
			return $this->idItem;
		}

		public function setIdItem($idItem){
			$this->idItem = $idItem;
		}

		public function getPedidoIdPedido(){
			return $this->pedidoIdPedido;
		}

		public function setPedidoIdPedido($pedidoIdPedido){
			$this->pedidoIdPedido = $pedidoIdPedido;
		}

		public function getQtd(){
			return $this->Qtd;
		}

		public function setQtd($Qtd){
			$this->Qtd = $Qtd;
		}

		public function getValorParcial(){
			return $this->valorParcial;
		}

		public function setValorParcial($valorParcial){
			$this->valorParcial = $valorParcial;
		}

		public function getProdutoIdProduto(){
			return $this->produtoIdProduto;
		}

		public function setProdutoIdProduto($produtoIdProduto){
			$this->produtoIdProduto = $produtoIdProduto;
		}

	}
?>