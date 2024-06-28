<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $sq = "SELECT * FROM itens";

    $result = $conn->query($sq);

    $conn->close();

    // UM RESULTADO
    $iten = $result->fetch_assoc();

    // TODOS OS RESULTADOS
    $itens = $result->fetch_all();

    print_r($itens);

?>