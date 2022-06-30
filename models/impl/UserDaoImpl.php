<?php
    include("../userDao.php");
    include("../../helpers/connection.php");
    class UserDaoImpl implements UserDao{

        public function getUsers()
        {
            
        }

        public function getUserForEmailPass($correo, $pass)
        {
            try{
                $sql = "SELECT * FROM tb_usuarios WHERE correo=? AND pass = ?";
                $conn = new connection();
                $query = $conn->getConnection()->prepare($sql);
                $query->execute(array($correo, $pass));
                if($query->rowCount()){
                    return true;
                }else{
                    return false;
                }

            }catch(PDOException $e){
                echo "Hubo un error al hacer la busqueda: " .$e->getMessage();
            }
        }
    }
?>