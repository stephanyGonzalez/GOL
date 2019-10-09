<?php
        $tabla_jugador = "jugador";

        error_reporting(0);

        $conexion = new mysqli("localhost", "root", "", "gol");    
        
        if($conexion->connect_errno){
            echo "nuestro sitio experimenta fallos,registrarse de nuevo mas tarde";
            exit();
        }