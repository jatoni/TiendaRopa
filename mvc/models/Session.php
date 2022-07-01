<?php
    class SessionDes{
        public function __construct(){
            session_start();
        }

        public function setSession($user){
            $_SESSION['nombre'] = $user;
        }

        public function getSession(){
            return $_SESSION['nombre'];
        }
        
        public function closeSession(){
            session_destroy();
            session_unset();
        }
    }
?>