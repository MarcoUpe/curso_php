<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $table = "itens";
    $nome = "xicara";
    $descricao = "xicara rosa";

    $sq = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($sq);

    $conn->close();

?>