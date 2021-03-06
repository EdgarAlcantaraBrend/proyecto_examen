<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="librerias/bostrap4/bootstrap.min.css">
    </head>
    <body style="background-color: #334377;">

        <div class="wrapper fadeInDown" style="background-color: #334377;">
            <div id="formContent" style="background-color:#d812c4;">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <h1 style="color: white;">Mi convertidor</h1>
                    <img src="img/logo.png" style="width: 200px;height:200px;" />
                </div>

                <!-- Login Form -->
                <form method="POST" id="frmLogin" onsubmit="return logear()" autocomplete="off">
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="username" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                    <input type="submit" class="fadeIn fourth" value="Entrar">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="registro.php">Registrarse</a>
                </div>

            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="librerias/jquery-3.6.0.min.js"></script>
        <script src="librerias/sweetalert.min.js"></script>

        <script>
            function logear(){
                $.ajax({
                    type: "POST",
                    data:  $('#frmLogin').serialize(),
                    url: "procesos/usuario/login/login.php",
                    success:function(respuesta){
                        
                        respuesta = respuesta.trim();
                        if (respuesta == 1) {
                            window.location = "vistas/inicio.php";
                        }else{
                            swal(":C","Fallo al entrar","error");
                        }
                    }
                });
                return false;
            }
                
        </script>
    </body>
</html>