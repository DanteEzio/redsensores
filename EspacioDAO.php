<?php

class EspacioDAO
{
    public $conexion;


    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function __destruct()
    {
    }

    // public function insertaEspacio($e)
    // {
    //     $edif = new EdificioDAO($this->conexion);
    //     $pDAO = new ProfesorDAO($this->conexion);


    //     //Llenamos siguiente tabla
    //     $stm = $this->conexion->prepare("
	// 			insert into espacio(nombre, numero, descripcion, Profesor_idProfesor, Edificio_idEdificio) values(?,?,?,?,?)");

    //     $temp = ($e->getNombre());
    //     $temp2 = ($e->getNumero());
    //     $temp3 = ($e->getDescripcion());
    //     $temp4 = ($pDAO->buscarIdProfesor($e->getEncargado()->getNombre()));
    //     $temp5 = ($edif->buscarIdEdificio($e->getEdificio()->getNombre()));
    //     $stm->bind_param("sisii", $temp, $temp2, $temp3, $temp4, $temp5);
    //     $stm->execute();


    //     $sql = "SELECT MAX(iddireccion) AS id FROM direccion";
    //     $sql = "SELECT MAX(Espacio_idEspacio) AS id FROM encargadoprofesorhistorico";
    //     $result = $this->conexion->query($sql);
    //     $row = $result->fetch_assoc();
    //     $id = $row["id"];

    //     //Llenamos tabla Encargado Profesor Historico
    //     $stm = $this->conexion->prepare("
	// 			insert into encargadoprofesorhistorico(Espacio_idEspacio,Profesor_idProfesor, fecha) 
	// 			values(?,?,?)");
    //     $temp6 = ($e->getProfesores());
    //     $temp7 = ($e->getFecha());

    //     $stm->bind_param("iis", $id, $temp6, $temp7);

        
    //     $stm->execute();
    //     $stm->close();
    //     $this->conexion->close();
    // }


    public function insertaEspacio($e)
    {
        $edif = new EdificioDAO($this->conexion);
        $pDAO = new ProfesorDAO($this->conexion);


        //Llenamos siguiente tabla
        $stm = $this->conexion->prepare("
				insert into espacio(nombre, numero, descripcion, Profesor_idProfesor, Edificio_idEdificio) values(?,?,?,?,?)");

        $temp = ($e->getNombre());
        $temp2 = ($e->getNumero());
        $temp3 = ($e->getDescripcion());
        $temp4 = ($pDAO->buscarIdProfesor($e->getEncargado()->getNombre()));
        $temp5 = ($edif->buscarIdEdificio($e->getEdificio()->getNombre()));
        $stm->bind_param("sisii", $temp, $temp2, $temp3, $temp4, $temp5);
        $stm->execute();


        $sql = "SELECT MAX(iddireccion) AS id FROM direccion";
        $sql = "SELECT MAX(Espacio_idEspacio) AS id FROM encargadoprofesorhistorico";
        $result = $this->conexion->query($sql);
        $row = $result->fetch_assoc();
        $id = $row["id"];

        //Llenamos tabla Encargado Profesor Historico
        $stm = $this->conexion->prepare("
				insert into encargadoprofesorhistorico(Espacio_idEspacio,Profesor_idProfesor, fecha) 
				values(?,?,?)");
        $temp6 = ($e->getProfesores());
        $temp7 = ($e->getFecha());

        $stm->bind_param("iis", $id, $temp6, $temp7);


        $stm->execute();
        $stm->close();
        $this->conexion->close();
    }
}
