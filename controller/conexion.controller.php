<?php


    class ConexionController{

        public function ctrLogin($user, $pass){

            $objModConexion = new ModelConexion($user, $pass);
            $rest = $objModConexion -> getLogin() -> fetch();
            if(gettype($rest) != "boolean"){
                
                $_SESSION["login"] = true;
                header("location:index.php");

                //echo "<script>alert('ha ingresado');</script>";

            }else{
                echo "<script>alert('contraseña errada');</script>";

            }
        }
    }

?>