<?php

	class UsuarioHasPedido
	{
		private $UsuarioIdUsuario;
		private $pedidoIdPedido;

		public function getUsuarioIdUsuario(){
			return $this->UsuarioIdUsuario;
		}

		public function setUsuarioIdUsuario($UsuarioIdUsuario){
			$this->UsuarioIdUsuario = $UsuarioIdUsuario;
		}

		public function getPedidoIdPedido(){
			return $this->pedidoIdPedido;
		}

		public function setPedidoIdPedido($pedidoIdPedido){
			$this->pedidoIdPedido = $pedidoIdPedido;
		}
	}
?>