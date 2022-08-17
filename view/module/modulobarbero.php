<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view/css/modulo.usuario.css">
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    <script src="view/js/sweetalert2.all.min.js"></script>



</head>

<body>

    <header class="header">
        <nav class="nav">
            <a href="index.php?ruta"><button type="button" class="btn-home">HOME <i class="fa-solid fa-house-user"></i></i></button></a>
        </nav>
    </header>

    <div class="user">
        <div class="imag">
            <img src="view/img/man.png" class="img-circ" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="name">Nombre de barberossss</a>
        </div>
    </div>

    <div class="col">
        <h1 class="titulo">barberos</h1>
        <div class="nav" id="tab" role="tablist" aria-orientation="vertical">
           
        </div>
    </div>


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Datos De barbero</h3>
        </div>

        <div class="card-body">
            <table id="td-Registro" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero Celular</th>
                        <th>Fecha Nacimiento</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $objCtrUsu = new  ControllerRegistro();
                    $listaRegistro = $objCtrUsu->ctrVerBarbero();

                    foreach ($listaRegistro as $dato) {

                        echo "
                                <tr>
                                    <td>" . $dato["CEDULA"] .       "</td>
                                    <td>" . $dato["NOMBRE"] .       "</td>
                                    <td>" . $dato["APELLIDO"] .     "</td>
                                    <td>" . $dato["NUM_CELULAR"] .  "</td>
                                    <td>" . $dato["F_NACIMIENTO"] . "</td>
                                    <td>" . $dato["EMAIL"] .        "</td>
                                    
                                   
                                    <td>

                                    
                                    <button type='button' class='btn btn-danger' onclick='eliminar(this.parentElement.parentElement )'  ><i class='fa fa-trash-o'></i></button>
                                    <button type='button' class='btn btn-info' data-toggle='modal' data-target='#modal-modificar'onclick='modificar(this.parentElement.parentElement);'><i class='fa fa-edit'></i></button>

                                        
                                        
                                    </td>
                                </tr>
                            ";
                        
                    }
                    ?>

                </tbody>
            </table>
            <?php
                if (isset($_GET['Eliminar'])) {
                    $objCtrusu = new ControllerRegistro();
                    $objCtrusu->ctrEliminarBarbero();
                }
            ?>
          

            <div class="modal modal-info fade" id="modal-modificar">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>

                        </div>
                        <div class="modal-body">
                            <h4 class="modal-title">Editar Datos De barbero</h4>
                            <!-- FORMULARIO EDIT-->
                            <form class="#" method="POST" id="form_edi">


                                <div>
                                    <br>
                                    <input type="text" id="txtnombre" name="txtnombre" placeholder="Nombres" class="BotDatPer">
                                </div>
                                <br>
                                <div>
                                    <input type="text" id="txtapellido" name="txtapellido" placeholder="Apellidos" class="BotDatPer">
                                </div>
                                <br>
                                <div>
                                    <input type="text" id="txtcedula" name="txtcedula" placeholder="cedula" class="BotDatPer">
                                </div>
                                <br>
                                <div>
                                    <input type="number" id="txtnumerocel" name="txtnumerocel" placeholder="# Movil" class="BotDatPer">
                                </div>
                                <br>
                                <div>
                                    <input type="date" id="txtfnacimiento" name="txtfnacimiento" placeholder="Fecha De Nacimiento" class="BotDatPer">
                                    <br>
                                    *Fecha de Nacimiento
                                </div>
                                <br>
                                <div>
                                    <input type="email" id="txtemail" name="txtemail" placeholder="E-mail" class="BotDatPer">
                                    <br>
                                    *este funcionara como tu usuario
                                </div>
                                <br>
                                <!-- <div>
                                    <input type="password" id="txtcontrasena" name="txtcontrasena" placeholder="Contraseña" class="BotDatUsu">
                                    <br>
                                    *minimo 6 caracteres maximo 12

                                </div>-->

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info " data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                <?php
                                if (isset($_POST['txtcedula'])) {
                                    $objCtrUsu = new ControllerRegistro();
                                    $objCtrUsu->ctrEditarBarbero();
                                }
                                ?>
                            </form>

                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="view/js/crud.js"></script>
</body>

</html>