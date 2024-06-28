<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    //$sql = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

    $sql = "DROP TABLE teste";

    $conn->query($sql);

    $conn->close();

?>