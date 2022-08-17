<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="view/css/barberoStyle.css">
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    <script src="view/js/sweetalert2.all.min.js"></script>

</head>

<body>
    <header>
        <div class="logo1u">
            <img class="logo1a" src="view/img/logo.jpg">
        </div>
        <div class="R_usuari">REGISTRO DE BARBEROS</div>
        
    </header>
    <main class="main1">
        <form class="Form_datper" method="POST">
            <fieldset class="DatPers1">
                <legend class="Lege_txto">Datos Personales</legend>
                <div>
                    <br>
                    <input type="text" id="txt_nombre" name="txt_nombre" placeholder="Nombres" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="text" id="txta_pellido" name="txt_apellido" placeholder="Apellidos" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="text" id="txt_cedula" name="txt_cedula" placeholder="cedula" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="number" id="txt_numerocel" name="txt_numerocel" placeholder="# Movil" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="date" id="txt_fnacimiento" name="txt_fecha" placeholder="año/mes/dia" class="BotDatPer" required>
                    <br>
                    *Fecha de Nacimiento
                </div>
                <br>
                <div>
                    <input type="email" id="txt_email" name="txt_email" placeholder="E-mail" class="BotDatPer" required>
                    <br>
                    *este funcionara como tu usuario
                </div>
                <br>
                <br>
                <div>
                    <input type="password" id="txt_contrasena" name="txt_contrasena" placeholder="Contraseña" class="BotDatPer" required>
                    <br>
                    *minimo 6 caracteres maximo 12

                </div>
                <br>
                <br>
                <br>
                
                <div class="b">
                    <button type="submit" class="btnCo4">Guardar</button>
                </div>
                <br>
            </fieldset>
        </form>
        <?php
        if (isset($_POST["txt_cedula"])) {

            $objCtrUsu = new ControllerRegistro();
            $objCtrUsu->ctrInsertarBarbero(
                $_POST["txt_cedula"],
                $_POST["txt_nombre"],
                $_POST["txt_apellido"],
                $_POST["txt_numerocel"],
                $_POST["txt_fecha"],
                $_POST["txt_email"],
                $_POST["txt_contrasena"]
            );
        }

        ?>

</body>

</html>