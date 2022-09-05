<?php
include '../Modelo/conexion.php';
include '../ProfesorDAO.php';

$jsonString = new ProfesorDAO($conn); //Llamamos a nuestra function

$metodo = $jsonString -> buscaProfesores();

echo json_encode($metodo, JSON_UNESCAPED_UNICODE); // Codificamos e imprimimos nuestra variable $json para mandarla como un texto