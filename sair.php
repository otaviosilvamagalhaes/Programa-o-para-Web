<?php
    session_start();
    //session_destroy();
    unset(
        $_SESSION['idCliente'],
        $_SESSION['nome'],
        $_SESSION['email'],
    );

    header('Location: index.html');
?>