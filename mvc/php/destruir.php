<?php
    require("../models/Session.php");

    $session = new SessionDes();

    $session->closeSession();

    header("Location: ../views/home.php");

?>