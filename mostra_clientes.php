<?php
    //Incluir arquivo que tem os dados de conexão ao banco
    include 'conecta.php';

    $consulta = "SELECT * From clientes";

    foreach ($conexao -> query($consulta) as $linha) {
        
        echo $linha['idClientes'] . "<br>";
        echo $linha['nome'] . "<br>";
        echo $linha['idade'] . "<br>";
        echo $linha['senha'] . "<br>";
        echo "<hr><br>";
    }

    echo "Exibindo a variavel linha";
    echo "<pre>";
    var_dump($linha);
    echo "</pre>";
?>