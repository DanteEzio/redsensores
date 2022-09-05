<?php

//Con esta impresión podemos comprobar si efectivamente nuestro form esta mandando algo
// print_r($_POST);

include "../Modelo/conexion.php";
include "../Edificio.php";
include "../EdificioDAO.php";
include "../Espacio.php";
include "../EspacioDAO.php";
include "../Modelo/ProfesorDAO.php";
include "../Departamento.php";
include "../DepartamentoDAO.php";
include "../Profesor.php";


$edifDAO = new EdificioDAO($conn);
$bEdificio = $edifDAO->buscarIdEdificio("G");
$edificio = new Edificio($bEdificio, "G");
// echo $bEdificio;
// echo $nEdificio;

$pDAO = new ProfesorDAO($conn);
$encargado = $pDAO->buscarIdProfesor("Rafael Perez");
echo $encargado;

$profesores = array(1, 2, 3);

// $profesores = array($e->getProfesores());

for ($i = 0; $i < count($profesores); $i++) {
    $temp4 = ($profesores[$i]);
    echo $temp4;
}

// var_dump($temp4);
// var_dump($profesores);

$dDAO = new DepartamentoDAO($conn);
$id = $dDAO->buscaIdDepartamento('Ciencias básicas');
$departamento = new Departamento($id, 'Ciencias básicas');
$profesorEnc = new Profesor($encargado, "Rafael Perez", $departamento);


// $profesores = [1,2,3,4];


$espacio = new Espacio(1, $edificio, 305, $profesorEnc, $profesores, "Sala", "Muchos alumnos", "2022-09-05");

$objEspacio = new EspacioDAO($conn);
$insert = $objEspacio->insertaEspacio($espacio);


// $id = $dDAO->buscaIdDepartamento($_POST["nombreDepartamento"]);
// $departamento = new Departamento($id, $_POST["nombreDepartamento"]);
// $p = new Profesor(1, $_POST["nombreProfesor"], $departamento);
// $objProfesor = new ProfesorDAO($conn);
// $insert = $objProfesor->insertaProfesor($p);