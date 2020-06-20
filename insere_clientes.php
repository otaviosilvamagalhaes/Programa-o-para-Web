<?php
    include 'conecta.php';

    $nome = "NOME INSERIDO";
    $idade = 26;
    $senha = "qazwsc";

    $consulta = $conexão->prepare("INSERT INTO clientes (nome,idade,senha) VALUES ('$nome','$idade','$senha')");
    //prepare ==> Prepara a consulta SQL e retorna um identificador de instrução a ser usado para operações adicionais na instrução. A consulta deve consistir em uma única instrução SQL.

    $consulta->execute();

    //execute ==> Executa uma query que foi previamente preparada usando a função mysqli_prepare()
?>