<?php
    session_start(); //activacion de sesiones

    class PlantillaController{
        public function ctrPlantilla(){

            if (isset($_SESSION["login"]) and $_SESSION["login"] == true){
                include_once "view/module/direcc.php";
                
            }else{
                include_once "view/module/login.php";
                
            }
            
            
        }
    }
    
    ?>