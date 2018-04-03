<?php

	class Folga
	{
		private $idFolga;
		private $diaSemana;
		private $diaMes;

		public function getIdFolga(){
			return $this->idFolga;
		}

		public function setIdFolga($idFolga){
			$this->idFolga = $idFolga;
		}

		public function getDiaSemana(){
			return $this->diaSemana;
		}

		public function setDiaSemana($diaSemana){
			$this->diaSemana = $diaSemana;
		}

		public function getDiaMes(){
			return $this->diaMes;
		}

		public function setDiaMes($diaMes){
			$this->diaMes = $diaMes;
		}

	}
?>