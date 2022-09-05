<?php

include "../Modelo/conexion.php";
include "../Modelo/profesorDAO.php";
include "../Profesor.php";
include "../Departamento.php";
include "../DepartamentoDAO.php";



if (isset($_POST)) {
    $dDAO = new DepartamentoDAO($conn);

    $id = $dDAO->buscaIdDepartamento($_POST["nombreDepartamento"]);
    $departamento = new Departamento($id, $_POST["nombreDepartamento"]);
    $p = new Profesor(1, $_POST["nombreProfesor"], $departamento);
    $objProfesor = new ProfesorDAO($conn);
    $insert = $objProfesor->insertaProfesor($p);
    echo "ok";
}



//Con esta impresión podemos comprobar si efectivamente nuestro form esta mandando algo
// print_r($_POST);