<?php

    // variaveis para conexao com o banco
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // assunto da aula
    $nome = "copo";

    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $conn->close();

?>