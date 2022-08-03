<?php 
    include("../../models/Session.php");
    $session = new SessionDes();
?>
<nav class = "menu">
        <ul class="men">
            <li><p>Women</p></li>
            <li><p>Men</p></li>
            <li><p>Childs</p></li>
            <li class="user"><p><i class="bi bi-person-circle"></i></p>
            <?php
                if($session->getSession() == ""){
            ?>
                <ul id="des" class="des">
                    <a href=".././views/login.php"><li>Log in</li></a>
                    <a href="#"><li>Create account</li></a>
                </ul>
            <?php
                }else{
            ?>
                <ul id="des" class="des">
                    <li><?php echo $session->getSession(); ?></li>
                    <a href="setting.php"><li>Setting</li></a>
                    <a href="./../php/destruir.php"><li>Cerrar</li></a>
                </ul>
            <?php
                }
            ?>
            </li>
            <li><p><i class="bi bi-cart-fill"></i></p></li>
        </ul>
</nav>