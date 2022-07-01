<?php
    require("../models/impl/UserDaoImpl.php");

    class LoginUserController{
        public function __construct()
        {
            $this->userDao = new UserDaoImpl();
        }

        public function UserExists($email, $pass){
            $UserDao = new UserDaoImpl();
            return $UserDao->getUserForEmailPass($email, $pass);
        }
        public function User($email, $user){
            $UserDao = new UserDaoImpl();
            return $UserDao->getOnlyUser($email, $user);
        }

        public function UserExistsWithUser($user, $pass){
            $UserDao = new UserDaoImpl();
            return $UserDao->getUserForUserPass($user, $pass);
        }
    }
?>