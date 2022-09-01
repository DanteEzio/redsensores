<?php
    include '../Modelo/consultas.php';

    $jsonString = obtenerDepartamento(); //Llamamos a nuestra funcion
    
    echo json_encode($jsonString); // Codificamos e imprimimos nuestra variable $json para mandarla como un texto