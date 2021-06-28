<?php 
    session_start();
    
    if (isset($_SESSION['usuario'])) {
        # code...
    
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Gestor</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../librerias/bostrap4/bootstrap.min.css">
        <link rel="stylesheet" href="../librerias/fontawesome/css/all.css">
        <link rel="stylesheet" href="../librerias/dataTable/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #dacdda">
            <div class="container">
                <a class="navbar-brand" href="inicio.php">
                    <img src="../img/logo.png" alt="" style="width: 50px;height:50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="inicio.php" style="color:black"><span class="fas fa-home"></span> Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../procesos/usuario/salir.php" style="color: red;"><span class="fas fa-power-off" style="color: red;"></span> Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.container -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
</html>
<?php
    }else{

        header("location:../index.php");
    }
?>