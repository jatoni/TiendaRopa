<?php
    require("../models/Session.php");
    $session = new SessionDes();

    if($session->getSession() != ""){
        header("Location: home.php");
    }else{
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/login.css">
            <title>BanJaq</title>
            <style>
                .error{
                    color: red;
                }
            </style>
        </head>
        <body>
            <form action="../php/LogIn.php" method="post">
                <div class="log">
                <?php
                    if(isset($messageError)){
                ?>
                    <span class="error">*<?php echo $messageError; ?></span><br>
                <?php
                                    }
                ?>
                    <h1>LOGIN</h1>
                    <input type="text" name="correoUser" placeholder="EMAIL OR USER" required>
                    <input type="password" name="pass" required>
                    <input class = "enviar" type="submit" value="LogIn">
                    <p>No tiene cuenta? <a href="../views/registrarse.php">Crear Cuenta</a></p>
                    <p>Olvido su contraseña? <a href="#">Forget Password</a></p>
                </div>
            </form>
        </body>
        </html>
<?php
    }
?>
