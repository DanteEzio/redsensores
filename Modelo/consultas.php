<?php

//echo "Funcionando"
function obtenerDepartamento()
{
    include "conexion.php";
    $query = "SELECT * FROM departamento"; //Traemos datos de la BD
    $result = mysqli_query($conn, $query); //Ejecutamos nuestra consulta y la almacenamod en una variable
    $json = array(); //Declaramos una variable que nos ayudará a enviar los datos

    // Este while nos ayuda a recorrer nuestra tabla departamento y termina hasta que no existan mas datos que recorrer
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            "idDepartamento" => $row["idDepartamento"],
            "nDepartamento" => $row["nombre"]
        );
    }
    return $json;
}

function obtenerEdificios()
{
    include "conexion.php";
    $query = "SELECT * FROM edificio"; //Traemos datos de la BD
    $result = mysqli_query($conn, $query); //Ejecutamos nuestra consulta y la almacenamod en una variable
    $json = array(); //Declaramos una variable que nos ayudará a enviar los datos

    // Este while nos ayuda a recorrer nuestra tabla departamento y termina hasta que no existan mas datos que recorrer
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            "idEdificio" => $row["idEdificio"],
            "nEdificio" => $row["nombre"]
        );
    }
    return $json;
}

function obtenerProfesores()
{
    include "conexion.php";
    $query = "SELECT * FROM profesor"; //Traemos datos de la BD
    $result = mysqli_query($conn, $query); //Ejecutamos nuestra consulta y la almacenamod en una variable
    $json = array(); //Declaramos una variable que nos ayudará a enviar los datos

    // Este while nos ayuda a recorrer nuestra tabla departamento y termina hasta que no existan mas datos que recorrer
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            "idProfesor" => $row["idProfesor"],
            "nProfesor" => $row["nombre"]
        );
    }
    return $json;
}

