<?php
    session_start();
    require_once("../controllers/LoginUserController.php");
    require("../models/Session.php");

    $session = new SessionDes();
    $UserController = new LoginUserController();

    $messageError = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["correoUser"], $_POST["pass"])){
            $name = $_POST["correoUser"];
            $pass = $_POST["pass"];
            $exists = $UserController->UserExists($name, $pass);
            if($exists){
                $session->setSession($UserController->User($name, $user));
                header("Location: ../views/home.php");
            }else{
                $messageError = "Usuario no existe";
                include("./views/login.php");
            }
        }
    }
    
?>