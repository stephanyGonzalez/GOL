<?php

    session_start();

    if (isset($_GET["email"]) && isset($_GET["password"]) ) {
     
      $conexion = new mysqli("localhost", "root", "", "gol");            
      $sql = "SELECT * FROM jugador WHERE email = '" . $_GET["email"] . "' AND password = '" . $_GET["password"] . "'";
      
      $resultado = $conexion->query($sql);


      if( $resultado-> num_rows == 1){

        $usuario = $resultado->fetch_assoc();

        $_SESSION["usuario"] = $_GET["email"];
        $_SESSION["id_equipo"] = $usuario["id_equipo"];

          header("Location: index.php?m=dashboard");
      }
      else{
          header("Location: index.php?e=0");
      }
    }

?>
