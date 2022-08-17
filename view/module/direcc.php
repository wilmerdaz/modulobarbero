<?php
    if (isset($_GET['ruta']))
    {switch ($_GET['ruta']) {
        case 'Barbero':
            require_once "view/module/modulobarbero.php";
        break;
        case 'registrar':
            require_once "view/module/registrobarb.php";
        break;
        
        default:
            require_once "view/module/home.usuario.php";
        break;
        
    } 
 }else{require_once "view/module/home.usuario.php";
    }
        

?>