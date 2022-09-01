<?php

class Profesor
{
    private $idProfesor;
    private $nombre;
    private $departamento;

    function __construct($idProfesor, $nombre, $departamento)
    { //int,string,Departamento
        $this->idProfesor = $idProfesor;
        $this->nombre = $nombre;
        $this->departamento = new Departamento($departamento->getIdDepartamento(), $departamento->getNombre());
    }


    function __destruct()
    {
    }

    function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getIdProfesor(): int
    {
        return $this->idProfesor;
    }

    function getNombre(): string
    {
        return $this->nombre;
    }
    function getDepartamento(): Departamento
    {
        return $this->departamento;
    }

    function toString(): string
    {
        return "Id: " . $this->getIdProfesor() . ",Nombre: " . $this->getNombre() . ", Departamento" . $this->getDepartamento()->toString() . "";
    }
}
