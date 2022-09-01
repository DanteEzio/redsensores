<?php
	include "Edificio.php";
	include "Departamento.php";
	include "Profesor.php";
	include "Espacio.php";
	
	$ed1= new Edificio(1,"Edificio T");
	$ed2= new Edificio(2,"Edificio H");
	$dpto1= new Departamento(1,"Sistemas");
	$dpto2= new Departamento(2,"Electronica");
	$p1= new Profesor(1,"Leo",$dpto1);
	$p2= new Profesor(2,"Alejandro",$dpto1);
	$p3= new Profesor(3,"Belem",$dpto1);
	$p4= new Profesor(3,"Roberto",$dpto2);
	
	$misprofesores= array();
	array_push($misprofesores,$p2);
	array_push($misprofesores,$p3);
	
	$espacio= new Espacio(1,$ed1,$p1,306,$misprofesores,"Salon","Salon lleno");
	
	
	echo $ed1->toString(). "<br> <br>";
	echo $dpto1->toString(). "<br> <br>";
	echo $p1->toString(). "<br> <br>";
	echo $espacio->toString(). "<br> <br>";
