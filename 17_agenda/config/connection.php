<?php

    $host = "localhost";
    $dbaname = "agenda";
    $user = "root";
    $pass = "";

    try {
        
        $conn = new PDO("mysql:host=$host;dbaname=$dbaname", $user, $pass);

        // ATIVAR MODO DE ERROS
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>