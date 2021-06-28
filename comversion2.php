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
        <link rel="stylesheet" href="librerias/bostrap4/bootstrap.min.css">
        <link rel="stylesheet" href="librerias/fontawesome/css/all.css">
        <link rel="stylesheet" href="librerias/dataTable/dataTables.bootstrap4.min.css">
    </head>
    <body style="background-color: #83dc8d" >
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #83dc8d">
            <div class="container">
                <a class="navbar-brand" href="inicio.php">
                    <img src="img/logo.png" alt="" style="width: 50px;height:50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="vistas/inicio.php" style="color:black"><span class="fas fa-home"></span> Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="procesos/usuario/salir.php" style="color: red;"><span class="fas fa-power-off" style="color: red;"></span> Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid" style="background-color: #cce898;" >
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <strong><h2 style="color: black;">CONVERSION DE GRADOS FARENHEIT A CELCIUS</h2></strong>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: #9bbda2;">
                    <div class="card-body">

                        <label for=""><h6 style="color: black;">GRADOS A CONVERTIR</h6></label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control"  aria-required="true" placeholder="Ingresa valor" required>
                        <hr>
                        <br>
                            
                        <br>
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <button class="btn btn-dark btn-block" id="calcular">Calcular</button>
                                <span class="btn btn-danger btn-block" id="limpiar">Limpiar</span>
                            </div>
                            <div class="col text-center">
                                <label for="" id="resultado2"></label>
                                <div class="alert alert-success text-center" role="alert">
                                    <div id="resultado" ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- /.container -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    </body>
</html>
<script>
    
    $(document).ready(function(){

    
        $('#calcular').click(function(){

            let cantidad= parseInt($('#cantidad').val());
            let resultado = (cantidad - 32) * (5/9);
            
            resultado = resultado+"";

            $('#resultado').text( "Los grados ingresados es igual a:"+ " " + resultado+" "+ "grados celcius");


        });
        $('#limpiar').click(function(){

            window.location="comversion2.php";
        })

    });

</script>
<?php
    }else{

        header("location:index.php");
    }
?>