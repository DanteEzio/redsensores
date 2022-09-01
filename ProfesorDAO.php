<?php
	class ProfesorDAO{
		public $conexion;
		
		
		public function __construct($conexion){
		$this->conexion=$conexion;
		}
		
		public function __destruct(){}
		
		public function insertaProfesor($p){
			$dptoDAO = new DepartamentoDAO($this->conexion);
			
			$stm=$this->conexion->prepare("
				INSERT INTO profesor(nombre,Departamento_idDepartamento) values(?,?)");
			$stm->bind_param("si",$p->getNombre(),$dptoDAO->buscaIdDepartamento($p->getDepartamento()->getNombre()));
			$stm->execute();
			$stm->close();
			$this->conexion->close();
		}		
	}
