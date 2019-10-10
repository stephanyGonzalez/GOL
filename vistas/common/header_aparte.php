<div class="container-fluid" >
            
  <div class="row">

      <div class="col">  
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="barra">
              <div class="col">
                  <a class="navbar-brand" href="#"> <img src="imagenes/lOGO.png" alt="" id="logo_barra" >  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
      </div>
    
      <div class="col">
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">

                    <li class="nav-item mt-3 ">
                        <a class="nav-link" href="index.php?m=torneos_disponibles"> <div class="barra_deco"> TORNEOS DISPONIBLES </div></a>
                    </li>

                    <li class="nav-item mt-3">
                      <a class="nav-link" href="index.php?m=mis_torneos"><div class="barra_deco">MIS TORNEOS</div></a>
                    </li>

                    <li class="nav-item mt-3">
                      <a class="nav-link" href="index.php?m=canchas"><div class="barra_deco">CANCHAS INFO </div></a>
                    </li>
                    
                  <div class="btn-group" id="boton_barra">

                  <?php 
                    if ( isset($_SESSION["usuario"]) ){
                  ?>

                    <button type="button" class="btn btn-warning  btn-lg  dropdown-toggle"
                            data-toggle="dropdown"><?=$_SESSION["usuario"]?> <span class="caret"></span>
                    </button>

                  <ul class="dropdown-menu " role="menu" >
                    <li><a href="index.php?m=logout"> Cerrar Session</a></li>
                  </ul>
                </div>
                    
                <?php
                        }
                        else{
                          echo "Ingresar";
                        }
                      ?>
                  </ul>
            </nav>

          </div>
          </div>
  </div>
