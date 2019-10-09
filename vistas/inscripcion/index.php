<?php
	session_start();

	$id_torneo = $_GET["id_torneo"];

	//Grabar la inscripcion en la bd
	$conexion = new mysqli("localhost", "root", "", "gol");

	$sql = "INSERT INTO relacion_equipo_torneo(id_equipo, id_torneos) VALUES (";
	$sql .= $_SESSION["id_equipo"] . "," . $id_torneo . ")";

	$conexion->query($sql);

	header("Location: index.php?m=torneos_disponibles");

?>