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
        <?php
            require_once("../controllers/LoginUserController.php");
            require_once("../models/Session.php");

            $session = new SessionDes();
            $UserController = new LoginUserController();
            $messageError = "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST["correoUser"], $_POST["pass"])){
                    $name = $_POST["correoUser"];
                    $pass = $_POST["pass"];
                    
                    $email = $UserController->UserExists($name, $pass);
                    $user = $UserController->UserExistsWithUser($name, $pass);
                    if($user or $email){
                        $sessions = $UserController->User($name, $name);
                        foreach($sessions as $row){
                            $userSession = $row["nombre"] . " " .$row["apellidop"] . " " . $row["apellidom"];
                        }
                        $session->setSession($userSession);
                        header("Location: ../views/home.php");
                    }else{
                            $messageError = "Password o Uer incorrectos*";
                            include_once("../views/login.php");     
                        }
                }
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="log">
                <?php
                    if(isset($messageError)){
                ?>
                    <span class="error"><?php echo $messageError; ?></span><br>
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