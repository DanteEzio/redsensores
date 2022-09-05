<?php

class EdificioDAO
{

    public $conexion;


    public function __construct($conexion)
    {

        $this->conexion = $conexion;
    }

    public function __destruct()
    {
    }

    public function insertaEdificio($edificio)
    {
        $stm = $this->conexion->prepare("
				insert into departamento(nombre) values(?)");
        $stm->bind_param("s", $edificio->getNombre());
        $stm->execute();
        $stm->close();
        $this->conexion->close();
    }

    public function buscaEdificio($dpto): Edificio
    {
        $sql = "SELECT * FROM departamento where nombre=" . $dpto . ";";
        $result = $this->conexion->query($sql);
        if ($row = $result->fetch_assoc()) {
            $d = new Edificio($row['idEdificio'], $row['nombre']);
        }
        $this->conexion->close();
        return $d;
    }

    public function buscarNombreEdificio($edif): string
    {
        $sql = "SELECT * FROM edificio WHERE idEdificio = $edif;";
        $result = $this->conexion->query($sql);
        if ($row = $result->fetch_assoc()) {
            $nombre = $row['nombre'];
        }
        return $nombre;
    }

    public function buscarIdEdificio($edif): int
    {
        $sql = "SELECT * FROM edificio WHERE nombre = '$edif';";
        $result = $this->conexion->query($sql);
        if ($row = $result->fetch_assoc()) {
            $idEdificio = $row['idEdificio'];
        }
        return $idEdificio;
    }
}
