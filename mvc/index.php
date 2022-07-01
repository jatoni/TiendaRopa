<?php
    require("./models/Session.php");
    $session = new SessionDes();

        if($session->getSession != ""){
            header("Location: views/home.php");
        }else{
            header("Location: views/login.php");
        }

?>