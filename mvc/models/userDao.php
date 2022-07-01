<?php
    interface UserDao{
        public function getUsers();
        public function getUserForEmailPass($correo, $pass);
        public function getOnlyUser($correo, $name);
        public function getUserForUserPass($user, $pass);
    }
?>