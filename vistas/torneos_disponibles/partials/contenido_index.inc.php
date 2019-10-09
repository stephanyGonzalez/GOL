<div>
    <div class="container-fluid ">
      <!------------------------------CAROUSEL---------------------------------------------------------------------->
      <div id="disponibles">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
              <img src="imagenes/carusel_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="imagenes/carusel_3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/carusel_2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!----------------------------------------------------------------------------------------------------------------->



        <!---------------------------------------TARJETAS TORNEOS------------------------------------------------------------>
        
        <div id="contenedor_tarjetas">
            <div class="row">

            <?php
            
               $conexion = new mysqli("localhost","root","","gol");
                
              
               $sql_consulta = "SELECT * FROM torneos ";

               $resultado_tajeta = $conexion->query ($sql_consulta) ;


                $sqlInscripciones = "SELECT id_torneos FROM relacion_equipo_torneo WHERE id_equipo = " . $_SESSION["id_equipo"];

                $resultadoInscripciones = $conexion->query($sqlInscripciones);

              
                $torneosUsuario = [];

                foreach ($resultadoInscripciones as $inscripcion) {
                    $torneosUsuario[] =  $inscripcion["id_torneos"];
                }





              foreach ($resultado_tajeta as $tarjeta_torneo) {
           
            
            ?>

              <div class="col-3" >
                  <div class="tarjetas">
                      <div class="card text-center" style="width: 15rem;">
                        <img src="imagenes/<?php echo $tarjeta_torneo["imagen_torneo"]; ?>"  class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php  echo  $tarjeta_torneo["nombre_torneo"];  ?></h5>
                          
                          <?php
                            if ( in_array( $tarjeta_torneo["id_torneo"], $torneosUsuario) ){
                          ?>
                              <p>INSCRIPTO</p>
                          <?php
                            } 
                            else{
                          ?>

                              <a href="index.php?m=inscripcion&id_torneo=<?=$tarjeta_torneo["id_torneo"]?>" class="btn btn-warning"> Inscribirme</a>
                          <?php } ?>

 




                        </div>
                      </div>
                    </div>
                   
              </div>
              <?php
                 }
               ?>
        </div>  

    </div>

<br/>
<br/>
<br/>
 