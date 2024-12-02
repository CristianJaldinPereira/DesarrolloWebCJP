<?php session_start();

if (!isset($_SESSION['usuario'])) {
    ?>
    <?php
    die('<div id="mesaje2" class="encabezado"> El usuario no esta logueado</div>`');
        header('Location:maqueta.html');
}
?>