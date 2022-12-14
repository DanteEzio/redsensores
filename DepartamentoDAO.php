<?php

class DepartamentoDAO
{
	
	public $conexion;


	public function __construct($conexion)
	{

		$this->conexion = $conexion;
	}

	public function __destruct()
	{
	}

	public function insertaDepartamento($departamento)
	{
		$stm = $this->conexion->prepare("
				insert into departamento(nombre) values(?)");
		$stm->bind_param("s", $departamento->getNombre());
		$stm->execute();
		$stm->close();
		$this->conexion->close();
	}

	public function buscaDepartamento($dpto): Departamento
	{
		$sql = "SELECT * FROM departamento where nombre=" . $dpto . ";";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$d = new Departamento($row['idDepartamento'], $row['nombre']);
		}
		$this->conexion->close();
		return $d;
	}

	public function buscaIdDepartamento($dpto): int
	{
		// $sql = "SELECT * from departamento where nombre ='Materiales';";
		$sql = "SELECT * FROM departamento WHERE nombre='$dpto';";
		// $sql = "SELECT * FROM departamento WHERE departamento.nombre= '$dpto';";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$id = $row['idDepartamento'];
		}
		return $id;
	}

	public function buscarNombreDepartamento($dpto): string
	{
		$sql = "SELECT * FROM departamento WHERE idDepartamento = $dpto;";
		$result = $this->conexion->query($sql);
		if ($row = $result->fetch_assoc()) {
			$nProfesor = $row['nombre'];
		}
		return $nProfesor;
	}


	public function buscaDepartamentos(): array
	{
		include "Departamento.php";

		$departamentos = array();
		$sql = "SELECT * FROM departamento;";
		$result = $this->conexion->query($sql);
		while ($row = $result->fetch_assoc()) {
			$d = new Departamento($row['idDepartamento'], $row['nombre']);
			array_push($departamentos, $d);
		}
		$this->conexion->close();
		return $departamentos;
	}
}

