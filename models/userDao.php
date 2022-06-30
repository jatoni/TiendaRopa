<?php
    interface UserDao{
        public function getUsers();
        public function getUserForEmailPass($correo, $pass);
    }
?>