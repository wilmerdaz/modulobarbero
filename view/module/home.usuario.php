<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home.usuario</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="view/css/home.usuario.css">



    </head>

    <body>
        
        <img class="logo" src="view/img/logo.jpg" >

        <!-- fecha actual-->
        <div class="date">
            <?php
            date_default_timezone_set("America/Bogota");
            echo date(" D / d / M / Y");
            ?>
        </div>
        
        <!-- cerrar sesion -->
        <div>
            <form method="post" class="formulario">
                <input type="hidden" name="txtOcu">
                <input type="submit" class="salir" value=" SALIR">
               
            </form>
            
        </div>
        
        <?php
        if (isset($_POST["txtOcu"])) {
            $_SESSION["login"] = false;
            header("location:index.php");
        }
        ?>

        <!-- ingreso a modulos -->
        <div class="modulos">
   
            <a href="index.php?ruta=registrar"><button type="button" class="btn-mod-useri"><i class="fa-solid fa-address-card"></i> registrar barbero</button></a>
            <a href="index.php?ruta=Barbero"><button type="button" class="btn-mod-user"><i class="fa fa-user"></i>Barberos</button></a>
      
        </div>
        <div class="frase">
            I LOVE BARBER <i class="fa-solid fa-face-grin-hearts icon-love"></i>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    </body>

</html>