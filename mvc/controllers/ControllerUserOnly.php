<?php
    require("../models/impl/UserDaoImpl.php");

    class UserController{
        public function __construct()
        {
            $this->userDao = new UserDaoImpl();
        }

        public function User($user){
            
        }
    }

?>