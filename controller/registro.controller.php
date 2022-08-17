<?php
    class ControllerRegistro{
        public function ctrInsertarBarbero($cedula,$nombre,$apellido,$num_celular,$f_nacimiento,$email,$contrasena){
            try {
                $objDtoregistro = new RegistroUsu ($cedula, $nombre, $apellido, $num_celular, $f_nacimiento, $email, $contrasena );
                $objDaoregistro = new ModelRegistro ( $objDtoregistro );
                
                if ( $objDaoregistro -> mdlInsertarBarbero() ) {
                    echo "<script>
                        Swal.fire(
                        'GENIAL !!',
                        'El Usuario ah sido Registrado',
                        'success'
                        );</script>";
    
                } else {
                    echo"ha ocurrido un error";
                }   
                
            } catch (PDOException $e) {
                echo"error en la funcion insertar barbero" . $e -> getMessage();
            }

        }//FIN DEL CONTROLLER INSERTAR

        public function ctrVerBarbero(){
            
            $array = false;
            try {
                $objDtoRegistro = new RegistroUsu (null, null, null, null, null, null,null );
                $objDaoRegistro = new ModelRegistro ( $objDtoRegistro );
                $array =$objDaoRegistro -> mdlVerBarbero() -> fetchAll();
                
                
            } catch (PDOException $e) {
                echo"error en el controlador" .$e ->getMessage();
            }
            return $array;
            
        }//FIN DEL CONTROLLER VERUSUARIO

        public function ctrEditarBarbero(){
            $objDtoRegistro = new RegistroUsu(
                $_POST["txtcedula"],
                $_POST["txtnombre"],
                $_POST["txtapellido"],
                $_POST["txtnumerocel"],
                $_POST["txtfnacimiento"],
                $_POST["txtemail"],
                $_POST["txtcontrasena"]
            );
            
                
            
            $objDaoRegistro = new ModelRegistro($objDtoRegistro);
            if ($objDaoRegistro -> mdlEditarBarbero()){
                echo "<script>
                    Swal.fire(
                        'Genial!!',
                        'El usuario ha sido modificado',
                        'success'
                    );
                    </script>
                ";
            } else{
                    echo "<script>
                        Swal.fire(
                            'ups!!',
                            'No se pudo modificar',
                            'danger'
                        );
                        </script>
                    "; 
                }    
        }    



        public function ctrEliminarBarbero(){
            $objDtoRegistro = new RegistroUsu(
                $_GET['Eliminar'],
                null,
                null,
                null,
                null,
                null,
                null
                
            );
            $objDaoRegistro = new ModelRegistro($objDtoRegistro);
            $objDaoRegistro -> mdlEliminarBarbero();
            echo"<script>
                    window.location ='index.php?ruta=Usuario';
                </script>";

        }    


    }




?>