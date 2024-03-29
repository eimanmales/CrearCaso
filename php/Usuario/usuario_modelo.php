<?php
    require_once("../modeloAbstractoDB.php");
    class Usuario extends ModeloAbstractoDB {
		private $idUsu;
		private $nomUsu;
		private $teleUsu;
        private $emailUsu;
		private $empUsu;
		private $user;
        private $password;
		private $update_at;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getIdUsu(){
			return $this->idUsu;
		}

		public function getNomUsu(){
			return $this->nomUsu;
		}
		
		public function getTeleUsu(){
			return $this->teleUsu;
		}

        public function getEmailUsu(){
			return $this->emailUsu;
		}

		public function getEmpUsu(){
			return $this->empUsu;
		}
		
		public function getUser(){
			return $this->user;
		}

        public function getPassword(){
			return $this->password;
		}

		public function getUdate_at(){
			return $this->update_at;
		}

		public function consultar($datos = array()) {
			
			$usuario = $datos['usuario'];
			$password = $datos['password'];
            $this->query = "
            SELECT usua_codi, usua_user, usua_pass, usua_nomb, usua_foto
			FROM tb_usuario 
			WHERE usua_user = '$usuario'
			";

            $this->obtener_resultados_query();
			
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function generarPassword($pass=""){
            $opciones = [
                'cost' => 12,
            ];
            
            $passwordHashed = password_hash($pass, PASSWORD_BCRYPT, $opciones);
            
            return $passwordHashed;
        }
		
		function __destruct() {
			//unset($this);
		}
	}
?>