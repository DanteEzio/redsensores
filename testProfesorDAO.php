<?php
include "Modelo/conexion.php";
include "Modelo/Profesor.php";
include "ProfesorDAO.php";

// $a1 = new Alimento(1, $_POST["nombreAlimento"], $_POST["nombreCategoria"], $_POST["numeroPorciones"], $_POST["tipoPorcion"]);
// var_dump($a1);
// $a1dao = new AlimentoDAO($conn);

// $a1dao->insertaAlimento($a1);

$p1 = new Profesor(1, $_POST['nombreProfesor'], $_POST['nombreDepartamento']);
echo $p1->toString();
var_dump($p1);


$p1dao = new ProfesorDAO($conn);
$p1dao->insertaProfesor($p1);