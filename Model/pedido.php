<?php

	class Pedido
	{
		private $idPedido;
		private $localEntrega;
		private $valorTotal;
		private $formaPag;
		private $promocaoIdPromocao;
		private $data;
		private $hora;
		private $status;
		private $taxEntrega;

		public function getIdPedido(){
			return $this->idPedido;
		}

		public function setIdPedido($idPedido){
			$this->idPedido = $idPedido;
		}

		public function getLocalEntrega(){
			return $this->localEntrega;
		}

		public function setLocalEntrega($localEntrega){
			$this->localEntrega = $localEntrega;
		}

		public function getValorTotal(){
			return $this->valorTotal;
		}

		public function setValorTotal($valorTotal){
			$this->valorTotal = $valorTotal;
		}

		public function getFormaPag(){
			return $this->formaPag;
		}

		public function setFormaPag($formaPag){
			$this->formaPag = $formaPag;
		}

		public function getPromocaoIdPromocao(){
			return $this->promocaoIdPromocao;
		}

		public function setPromocaoIdPromocao($promocaoIdPromocao){
			$this->promocaoIdPromocao = $promocaoIdPromocao;
		}

		public function getData(){
			return $this->data;
		}

		public function setData($data){
			$this->data = $data;
		}

		public function getHora(){
			return $this->hora;
		}

		public function setHora($hora){
			$this->hora = $hora;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}

		public function getTaxEntrega(){
			return $this->taxEntrega;
		}

		public function setTaxEntrega($taxEntrega){
			$this->taxEntrega = $taxEntrega;
		}

	}
?>