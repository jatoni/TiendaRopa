<?php
    require("../models/Session.php");
    $session = new SessionDes();

    if($session->getSession() == ""){
        header("Location: ../views/login.php");
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
    <?php include("../views/template/menu.php");?>
    <p>
        <?php
            echo $session->getSession();
        ?>
    </p>
    <a href="../php/destruir.php">Cerrar</a>
    <div class="carr">
        <img src="../assets/Screenshot from 2022-07-03 22-23-41.png" alt="" srcset="">
    </div>
    
</body>
</html>
<?php
    }
?>

