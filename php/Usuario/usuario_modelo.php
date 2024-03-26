<?php
    require_once("../modelo/conexion.php");
    class Usuario extends ModeloAbstractoDB {
		private $idUsu;
		private $nomUsu;
		private $teleUsu;
        private $emailUsu;
		private $empUsu;
		private $alias;
        private $clave;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getIdusu(){
			return $this->idUsu;
		}

		public function getNomUsu(){
			return $this->nomUsu;
		}
		
		public function getTeleUsu(){
			return $this->teleUsu;
		}

        public function getEmailusu(){
			return $this->emailUsu;
		}

		public function getEmpUsu(){
			return $this->empUsu;
		}
		
		public function getAlias(){
			return $this->alias;
		}

        public function getClave(){
			return $this->clave;
		}

		public function consultar($comu_codi='') {
			if($comu_codi !=''):
				$this->query = "
				SELECT comu_codi, comu_nomb, muni_codi
				FROM tb_comuna
				WHERE comu_codi = '$comu_codi' order by comu_codi
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		
		function __destruct() {
			//unset($this);
		}
	}
?>