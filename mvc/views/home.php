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
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            echo $session->getSession();
        ?>
    </p>
    <a href="../php/destruir.php">Cerrar</a>
</body>
</html>
<?php
    }
?>

