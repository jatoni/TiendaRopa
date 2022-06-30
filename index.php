<?php
    session_start();
    $_SESSION["nombre"] = "";
    if(isset($_SESSION["nombre"])){
        if($_SESSION["nombre"] != ""){
            header("Location: views/home.php");
        }else{
            header("Location: views/login.php");
        }
    }

?>