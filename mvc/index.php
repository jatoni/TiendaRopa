<?php
    require("./models/Session.php");
    $session = new SessionDes();
    header("Location: views/home.php");
?>