<?php

$server = "localhost:3306";
$user = "root";
$password = "1234";
$db = "redsensores";
$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
	die("Conexion fallida" . $conn->connect_error);
} else {
	// echo "Conexion exitosa";
}
