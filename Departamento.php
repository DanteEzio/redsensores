<?php
class Departamento
{
	private $idDepartamento;
	private $nombre;


	function __construct($idDepartamento, $nombre)
	{
		$this->idDepartamento = $idDepartamento;
		$this->nombre = $nombre;
	}

	function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	function setIdDepartamento($idDepartamento)
	{
		$this->idDepartamento = $idDepartamento;
	}


	function getNombre(): string
	{
		return $this->nombre;
	}

	function getIdDepartamento(): int
	{
		return $this->idDepartamento;
	}

	function __destruct()
	{
	}

	function toJSON(): array
	{
		return [
			"idDepartamento" => $this->idDepartamento,
			"nombreDepartamento" => $this->nombre
		];
	}

	function toString(): string
	{
		return
			"idDepto:" . $this->getIdDepartamento() .
			", nombre:" . $this->getNombre() . "";
	}
}
