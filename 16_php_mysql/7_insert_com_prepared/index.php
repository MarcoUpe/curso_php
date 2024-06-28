<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $nome = "Suporte Microfone";
    $descricao = "Suporte Microfone com 3M";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

    $stmt->execute();

    $conn->close();

?>