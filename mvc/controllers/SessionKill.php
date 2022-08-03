<?php
    require("../models/Session.php");

    class SessionKill{
        public function __construct(){
            $this->KillSess = new SessionDes();
        }

        public function QuitSession(){
            $kill = new SessionDes();
            $kill->closeSession();
            header("Location: ../views/home.php");
        }
    }
?>