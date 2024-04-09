<?php

    $arr = [1, 2, 3];
    echo count($arr) . "<br>"; // conta quantos elementos tem o array

    $arr2 = range(1, 10);
    echo count($arr2) . "<br>"; // conta quantos elementos do intervalo

    $arr3 = ["nome" => "Marco", "idade" => 29, "profissao" => "programador"]; // conta elementos do array nomeado
    echo count($arr3) . "<br>";

?>