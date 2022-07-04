<?php
    require_once("../controllers/LoginUserController.php");
    require("../models/Session.php");

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
                // header("Location: ../views/login.php");
                echo "hola";
            }
        }
    }
    
?>