<?php
    include("../models/Session.php");
    include("../controllers/LoginUserController.php");
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
    
    <form action="" method="post">
        <img src="" alt="" srcset="">
        <input type="text" />
    </form>
</body>
</html>
<?php
    }
    ?>