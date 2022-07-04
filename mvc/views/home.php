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
    <link rel="stylesheet" href="../css/menu.css">
    <title>Document</title>
</head>
<body>
    <?php include("../views/template/menu.php");?>
    <script src="../js/user.js"></script>
</body>
</html>
<?php
    }
?>

