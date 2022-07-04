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
    // echo "hola desde LoginController";
    // $user = new LoginUserController();
    // $users = $user->UserExistsWithUser("5banano5","Ju.55.25.17");
    // $email = $user->UserExists("antoniotorresj15@gmail.comv","Ju.55.25.17");
    // if($users or $email){
    //     echo "Usuario existe";
    // }else{
    //     echo "Usuario no existe";
    // }
?>