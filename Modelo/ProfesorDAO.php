<?php

class ProfesorDAO
{
	public $conexion;


	public function __construct($conexion)
	{
		$this->conexion = $conexion;
	}

	public function __destruct()
	{
	}

	public function insertaProfesor($p)
	{
		
		

		$dptoDAO = new DepartamentoDAO($this->conexion);

		$stm = $this->conexion->prepare("
				insert into profesor(nombre,Departamento_idDepartamento) values(?,?)");
		$temp = ($p->getNombre());
		$temp2 = ($dptoDAO->buscaIdDepartamento($p->getDepartamento()->getNombre()));
		$stm->bind_param("si", $temp, $temp2);
		$stm->execute();
		$stm->close();
		$this->conexion->close();
	}

	public function buscaProfesores(): array
	{
		$profesores = array();
		$sql = "SELECT p.idProfesor,p.nombre as nombreProfesor,
		d.idDepartamento, d.nombre as nombreDepartamento 
		from profesor p inner join departamento d 
		on p.Departamento_idDepartamento= d.idDepartamento;";
		$result = $this->conexion->query($sql);
		while ($row = $result->fetch_assoc()) {

			$d = new Departamento($row['idDepartamento'], $row['nombreDepartamento']);
			$p = new Profesor($row['idProfesor'], $row['nombreProfesor'], $d);
			//echo $p->toString();
			array_push($profesores, $p->toJSON());
		}
		$this->conexion->close();
		return $profesores;
	}

	public function buscarNombreProfesor($prof): string
	{
		$sql = "SELECT * FROM profesor WHERE idProfesor = $prof;";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$nProfesor = $row['nombre'];
		}
		return $nProfesor;
	}

	public function buscarIdProfesor($prof): int
	{
		$sql = "SELECT * FROM profesor WHERE nombre = '$prof';";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$idProfesor = $row['idProfesor'];
		}
		return $idProfesor;
	}

	public function buscarIdDepartamentoProfesor($prof): int
	{
		$sql = "SELECT * FROM profesor WHERE nombre = '$prof';";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$Departamento_idDepartamento = $row['Departamento_idDepartamento'];
		}
		return $Departamento_idDepartamento;
	}

	public function buscarProfesor($prof): string
	{
		$sql = "SELECT * FROM profesor WHERE nombre = '$prof';";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$idProfesor = $row['idProfesor'];
		}
		return $idProfesor;
	}
}
