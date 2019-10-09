<?php

  if ( isset( $_SESSION["usuario"]) ){
    header("Location: index.php?m=dashboard");
  }

?>


  
    <div class="container-fluid">

            <div class="row">

                  <div class="col-6 my-1">
                    <a href="index.php">
                      <div class="logo_barra"> <img src="imagenes/LOGO.png" class="logo"> </div>
                    </a>
                  </div>

            

      <!---------------------LOGIN------------------------------------------------>

        <div class="col-6 my-1">
          <form class="form-inline" method="GET" action="index.php"  >
                 <input type="hidden"  name="m" value="ingreso"> 

                 <div class="form-group mx-sm-3 mb-2">
                  <label for="EMAIL" class="sr-only">email</label>
                  <input type="text" class="form-control" id="EMAIL" placeholder="email" name="email">
                </div>


                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Password</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
                </div>

                <button type="submit" class="btn btn-primary mb-2">Sing in</button>
          </form>
       </div>
      </div>        
           

      <!-------------------------------------------------------------------------->






      <!----------------------------------"VENI A JUGAR"----------------------------------->

          <div class="row">

                <div class="col-5 mt-4"   class="encabezado">
                    <img src="imagenes/encabezado.png" class="img-fluid" class="texto" >
                </div>
      <!-------------------------------------------------------------------------->

      <!------------------------REGISTRO!!------------------------------------------->
              
                <div class="col-7 mt-2 " >

                    <h1 class="text-center display-4 font-weight-bold">Registrate gratis!</h1>

                    <form class="mt-4" action="index.php">

                        <input type="text" class="form-control" placeholder="nombre" name=nombre>
                        <input type="password" class="form-control mt-2" placeholder="Contraseña" name=password>
                        <input type="email" class="form-control mt-2" placeholder="Email" name=email>

                        <label for="exampleFormControlSelect1"><h3>Posicion en la que juegas<h3></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="posiciones">
                          <option value="0">delantero</option>
                          <option value="1">portero</option>
                          <option value="2">defensa</option>
                          <option value="3">central</option>
                          <option value="4">volante</option>
                        </select>
                      
                      <label for="exampleFormControlSelect1"><h3>Nombre de su equipo<h3></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="equipos">
                          <option value="1">america de cali</option>
                          <option value="2">Nacional</option>
                          <option value="3">millonarios</option>
                          <option value="4">River Plate</option>
                          <option value="5">Boca Juniors</option>
                          <option value="6"> Peñarol</option>
                          <option value="7">Santos</option>
                          <option value="8">Santa Fe</option>
                        </select>
                      

                        <button type="submit"  class="btn btn-warning my-3" name="btn_registro">Registrarse</button>
                    </form>

                    <ul class=" text-center display-5 list-unstyled list-inline" class="redes_sociales">
                      <li class="list-inline-item"> <a href="#"> <i class="fab fa-facebook"></i>     </a> </li>
                      <li class="list-inline-item"> <a href="#">  <i class="fab fa-instagram"></i> </a> </li>
                      <li class="list-inline-item"> <a href="#">  <i class="fab fa-twitter"></i>  </a> </li>
                    </ul>

                </div>
              </div>


                    <?php
                     
                      if(isset($_GET['btn_registro'])){

                        include("vistas/registro/abrir_conexion.php");

                        $equipos = $_GET['equipos'];
                        $posiciones = $_GET['posiciones'];
                        $nombre = $_GET['nombre'];
                        $email = $_GET['email'];
                        $password = $_GET['password'];
                        


                        $conexion->query("INSERT INTO $tabla_jugador (id_equipo,id_posiciones,nombre,email,password) values ('$equipos','$posiciones','$nombre','$email','$password')");                               

                      }
                  ?>

                    

                


            


         
