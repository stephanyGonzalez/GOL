<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">

    <link rel="stylesheet" href="stilo.css">    
    <script src="https://kit.fontawesome.com/e22ad3f821.js"></script>

      <title>base</title>
      
  </head>


  <body class="fondo_base">
  
    <header>
         <?php
          
          if ( isset($mostrarNavBar) &&  $mostrarNavBar == true ){
            include "vistas/common/header_aparte.php";
          }
          
          ?>
    </header>


    <?php
      if ( isset( $_GET["e"]) ){
    ?>
        <div class=" m-3 alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Usuario y/o contraseña no validos. </strong>Intente nuevamente.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>        
      <?php } ?>

  
     <!-- ACA VA EL COTENIDO DE CADA SECCION -->
     <?php include ($contenido); ?>






      <footer>
      
      
      
      
      
      </footer>


      <script src="vendor\jQuery\jquery.js">   </script>
    	<script src="vendor\popper\popper.min.js">    </script>
      <script src="vendor\bootstrap\js\bootstrap.min.js">   </script>
</body>
</html>