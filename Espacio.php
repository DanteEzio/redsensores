<?php
class Espacio
{
    private $idEspacio;
    private $edificio; //Edificio en el que vive el espacio
    private $numero; //Numero del espacio
    private $encargado; // Un dato tipo profesor que representa al encargado
    private $profesores = array(); //Coleccion de datos tipo profesor
    private $nombre; //Coleccion de datos tipo profesor
    private $descripcion; //Coleccion de datos tipo profesor


    function __construct($idEspacio, $edificio, $numero, $encargado, $profesores, $nombre, $descripcion)
    {
        $this->idEspacio = $idEspacio;
        $this->edificio = new Edificio($edificio->getIdEdificio(), $edificio->getNombre());
        $this->numero = $numero;
        $this->encargado = new Profesor($encargado->getIdProfesor(), $encargado->getNombre(), $encargado->getDepartamento());
        $this->profesores = $profesores;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    function __destruct()
    {
    }

    function setIdEspacio($idEspacio)
    {
        $this->idEspacio = $idEspacio;
    }

    function setNumero($numero)
    {
        $this->numero = $numero;
    }

    function setProfesores($profesores)
    {
        $this->profesores = $profesores;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getIdEspacio(): int
    {
        return $this->idEspacio;
    }

    function getNumero(): int
    {
        return $this->numero;
    }

    function getProfesores(): array
    {
        return $this->profesores;
    }

    function getEdificio(): Edificio
    {
        return $this->edificio;
    }

    function getEncargado(): Profesor
    {
        return $this->encargado;
    }


    function getNombre(): string
    {
        return $this->nombre;
    }

    function getDescripcion(): string
    {
        return $this->descripcion;
    }

    function agregaProfesor($profesor)
    {
        array_push($this->profesores, $profesor);
    }

    function eliminaProfesor($i)
    {
        unset($this->getProfesores()[$i]);
    }

    function muestraProfesores(): string
    {
        $cadena = "";
        foreach ($this->getProfesores() as $p) {
            $cadena = $cadena . $p->toString();
        }
        return $cadena;
    }

    //Arreglo asociativo para convertir a JSON
    function toJSON(): array
    {
        return [
            "IdEspacio" => $this->IdEspacio,
            "Edificio" => $this->Edificio,
            "Encargado" => $this->Encargado,
            "Nombre" => $this->Nombre,
            "Descripcion" => $this->Descripcion,
            "Profesores" => $this->Profesores->toJSON()
        ];
    }

    function toString(): string
    {
        return "IdEspacio: " . $this->getIdEspacio() .
            "Edificio:" . $this->getEdificio()->toString() . ",
			Numero:" . $this->getNumero() . ",
			Encargado:" . $this->getEncargado()->toString() . ",
			Nombre:" . $this->getNombre() . ",
			Descripcion:" . $this->getDescripcion() . ",
			Profesores:" . $this->muestraProfesores();
    }
}
