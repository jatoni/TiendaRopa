<?php
    require("../models/userDao.php");
    require("../helpers/connection.php");

    class UserDaoImpl implements UserDao{

        public function getOnlyUser($email, $name)
        {
            try{
                $sql = "SELECT nombre FROM tb_usuarios WHERE correo = ? OR username = ?";
                $conn = new connection();
                $query = $conn->getConnection()->prepare($sql);
                $query->execute(array($email, $name));
                return $query->fetchColumn();
                $conn->getCloseConnection();
            }catch(PDOException $e){
                echo "Hubo un error al hacer la busqueda: " . $e->getMessage();
            }
        }

        public function getUsers(){
            try{
                $sql = "SELECT * FROM tb_usuarios;";
                $conn = new connection();
                $query = $conn->getConnection()->prepare($sql);
                $query->execute();
                return $query->fetchAll(PDO::FETCH_ASSOC);
                $conn->getCloseConnection();
            }catch(PDOException $e){
                echo "Hubo un error al hacer la busqueda: " . $e->getMessage();
            }
        }

        public function getUserForEmailPass($correo, $pass)
        {
            try{
                $sql = "SELECT * FROM tb_usuarios WHERE correo = ? AND pass = ?";
                $conn = new connection();
                $query = $conn->getConnection()->prepare($sql);
                $query->execute(array($correo, $pass));
                if($query->rowCount()){
                    return true;
                }else{
                    return false;
                }
                $conn->getCloseConnection();
            }catch(PDOException $e){
                echo "Hubo un error al hacer la busqueda: " .$e->getMessage();
            }
        }
        
        public function getUserForUserPass($user, $pass)
        {
            try{
                $sql = "SELECT * FROM tb_usuarios WHERE username = ? AND pass = ?";
                $conn = new connection();
                $query = $conn->getConnection()->prepare($sql);
                $query->execute(array($user, $pass));
                if($query->rowCount()){
                    return true;
                }else{
                    return false;
                }
                $conn->getCloseConnection();
            }catch(PDOException $e){
                echo "Hubo un error en query: " . $e->getMessage();
            }
        }
    }
?>