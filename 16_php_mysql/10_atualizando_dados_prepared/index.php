<?php

    // variaveis para conexao com o banco
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // assunto da aula
    $id = 5;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "SOFA";
    $descricao = "SOFA CAMA 3 LUGARES";

    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error) {
        echo "Erro: ". $stmt->error;
    }

    $conn->close();

?>