<?php

    $arr = [
        "cor" => "vermelho",
        "forma" => "retangulo",
        "material" => "aço"
    ];

    extract($arr); // extrai os argumentos dos arrays e transforma em variavel

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Marco";

    $pessoa = [
        "nome" => "João",
        "idade" => 37
    ];

    echo "$nome <br>";

    extract($pessoa); // sobrescreve a variavel com a extração do argumento com o mesmo nome

    echo "$nome <br>";
    echo "$idade <br>";

?>