<?php include "header.php";?>
<?php include "footer.php";?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body{
                margin: 0;
                padding: 0;
                background: url("../img/logo6.jpg");   
                background-size: cover;
                background-position: center;
                overflow: hidden;
                height: 80vh;
            } 
        </style>
    </head>
    <body >
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <span class="btn btn-success btn-block" id="1">Conversion de Dolares a Pesos</span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="btn btn-secondary btn-block" id="2">Conversion de Grados Farenheit a Celcius</span>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <span class="btn btn-primary btn-block" id="3">Conversion de Centimetros a Metros</span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="btn btn-warning btn-block" id="4">Conversion de Libras a Kilogramos</span>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <span class="btn btn-secondary btn-block" id="5">Conversion de minutos a horas</span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="btn btn-dark btn-block" id="6">Conversion de comvertir de Dias a horas </span>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <span class="btn btn-success btn-block" id="7">Conversion de Millas a Kilometros </span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="btn btn-warning btn-block" id="8">Conversion de Pies a Metros </span>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <span class="btn btn-primary btn-block" id="9">Conversion de Yardas a Metros</span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="btn btn-secondary btn-block" id="10">Conversion de Minutos a Segundos</span>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <span class="btn btn-success btn-block" id="11">Conversion de Yardas a Centimetros</span>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="btn btn-dark btn-block" id="12">Conversion de Kilogramo a Gramos</span>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<script>

    $(document).ready(function(){

        $('#1').click(function(){n
            window.location = "../comversion1.php";
        });
        $('#2').click(function(){

            window.location = "../comversion2.php";
        });
        $('#3').click(function(){

            window.location = "../comversion3.php";
        });
        $('#4').click(function(){

            window.location = "../comversion4.php";
        });
        $('#5').click(function(){

            window.location = "../comversion5.php";
        });
        $('#6').click(function(){

            window.location = "../comversion6.php";
        });
        $('#7').click(function(){

            window.location = "../comversion7.php";
        });
        $('#8').click(function(){

            window.location = "../comversion8.php";
        });
        $('#9').click(function(){

            window.location = "../comversion9.php";
        });
        $('#10').click(function(){

            window.location = "../comversion10.php";
        });
        $('#11').click(function(){

            window.location = "../comversion11.php";
        });
        $('#12').click(function(){

            window.location = "../comversion12.php";
        });
    })
</script>