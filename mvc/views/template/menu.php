<?php 
    include("../../models/Session.php");
    $session = new SessionDes();
?>
<nav class = "menu">
        <ul class="men">
            <li><p>Women</p></li>
            <li><p>Men</p></li>
            <li><p>Childs</p></li>
            <li onclick="opUser()" class="user"><p><i class="bi bi-person-circle"></i></p>
                <ul id="des" class="des">
                    <li><?php echo $session->getSession(); ?></li>
                    <li><a href="setting.php">Setting</a></li>
                    <li><a href=".././php/destruir.php">Cerrar</a></li>
                </ul>
            </li>
            <li><p><i class="bi bi-cart-fill"></i></p></li>
        </ul>
    </nav>