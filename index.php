 <?php

 $modulo = "index";
if( isset($_GET["m"])){


 switch ( $_GET["m"] ) {

     case "home":
         $modulo = "index";
         break;
    
     case "ingreso":
         $modulo = "ingreso";
         break;

    case "torneos_disponibles":
         $modulo = "torneos_disponibles";
         break;

    case "dashboard":
        $modulo = "dashboard";
         break;
    
    case "logout":
        $modulo = "logout";
        break;

     case "noticias":
         $modulo = "noticias";
         break;

     case "mis_torneos":
     $modulo = "mis_torneos";
     break;

    case "inscripcion":
        $modulo = "inscripcion";
        break;
    }
}

 include"vistas/" . $modulo . "/index.php" 


 ?> 