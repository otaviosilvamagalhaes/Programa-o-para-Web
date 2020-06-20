<?php
    session_start();
    if(
        (!isset($_SESSION['idClientes'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)){
        
        unset($_SESSION['idCliente']);
        unset($_SESSION['nome']);
        unset($_SESSION['idade']);
        header('Location: index.html');
    }
    echo "BEM VINDO A UMA PÁGINA RESTRITA...<br>";
    echo "(mas nem tão restrita por enquanto...!!!!!!)<br>";
?>

<a href="sair.php">SAIR</a>