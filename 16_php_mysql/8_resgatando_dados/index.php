<?php

    // variaveis para conexao com o banco
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // assunto da aula
    $id = 3;

    // fazendo a consulta chamando a variavel de conexao
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    // passando parametro para o SQL
    $stmt->bind_param("i", $id); // s = string, i = integer, d = double

    // executanto o sql
    $stmt->execute();

    // jogando o resultado da consulta em result
    $result = $stmt->get_result();

    // pega todos resultados ee coloca em data
    $data = $result->fetch_all();

    print_r($data);

    $conn->close();

?>