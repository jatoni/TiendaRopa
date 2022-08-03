<?php
    require_once("../controllers/SessionKill.php");

    $kill = new SessionKill();
    
    $kill->QuitSession();
?>