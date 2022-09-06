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


// $edifDAO = new EdificioDAO($conn);
// $bEdificio = $edifDAO->buscarIdEdificio("G");
// $edificio = new Edificio($bEdificio, "G");

// $pDAO = new ProfesorDAO($conn);
// $encargado = $pDAO->buscarIdProfesor("Rafael Perez");
// echo $encargado;

// $dDAO = new DepartamentoDAO($conn);
// $id = $dDAO->buscaIdDepartamento('Ciencias básicas');
// $departamento = new Departamento($id, 'Ciencias básicas');

// $profesor = new Profesor(1, "Rafael Perez", $departamento);
// $profesor2 = new Profesor(2, "Leonardo Sánchez", $departamento);
// $profesor3 = new Profesor(3, 'Alejandro Reyes', $departamento);
// $profesores = array();

// array_push($profesores, $profesor);
// array_push($profesores, $profesor2);
// array_push($profesores, $profesor3);

// $profesorEnc = new Profesor($encargado, "Rafael Perez", $departamento);



// $espacio = new Espacio(1, $edificio, 305, $profesorEnc, $profesores, "Sala", "Muchos alumnos");

// $objEspacio = new EspacioDAO($conn);
// $insert = $objEspacio->insertaEspacio($espacio);

// ************************ Hasta aquí todo funciona bien ********************

// Inserción Final Funcionando

if (isset($_POST)) {

    //Edificio
    $edifDAO = new EdificioDAO($conn);
    $bEdificio = $edifDAO->buscarIdEdificio($_POST["nombreEdificio"]);
    $edificio = new Edificio($bEdificio, $_POST["nombreEdificio"]);

    //Numero
    $numero = $_POST["numero"];

    //Profesor Encargado
    $pDAO = new ProfesorDAO($conn);
    $dDAO = new DepartamentoDAO($conn);
    $idProf = $pDAO->buscarIdProfesor($_POST["profesorEncargado"]);
    $idDepartamento = $pDAO->buscarIdDepartamentoProfesor($_POST["profesorEncargado"]);
    $nomDepartamento = $dDAO->buscarNombreDepartamento($idDepartamento);
    $departamento = new Departamento($idDepartamento, $nomDepartamento);
    $profesorEnc = new Profesor($idProf, $_POST["profesorEncargado"], $departamento);

    // Profesores que se encuentran en el espacio
    $profesArreglo= array();
    $profes = $_POST["profesores"];
    

    for ($i = 0; $i < count($profes); $i++) {
        $idProf = $pDAO->buscarIdProfesor($profes[$i]);
        $idDepartamento = $pDAO->buscarIdDepartamentoProfesor($profes[$i]);
        $nomDepartamento = $dDAO->buscarNombreDepartamento($idDepartamento);
        $departamento = new Departamento($idDepartamento, $nomDepartamento);
        $profesor = new Profesor($idProf, $profes[$i], $departamento);

        array_push($profesArreglo, $profesor);
    }

    //Nombre del Espacio
    $nEspacio = $_POST["nombreEspacio"];

    //Descripción Espacio
    $Descripcion = $_POST["descripcion"];


    $espacio = new Espacio(1, $edificio, $numero, $profesorEnc, $profesArreglo, $nEspacio, $Descripcion);

    $objEspacio = new EspacioDAO($conn);
    $insert = $objEspacio->insertaEspacio($espacio);

    echo "ok";
}
//Con esta impresión podemos comprobar si efectivamente nuestro form esta mandando algo
// print_r($_POST);