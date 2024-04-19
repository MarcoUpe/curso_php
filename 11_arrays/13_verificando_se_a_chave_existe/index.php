<?php

    $arr = [
        "nome" => "Marco",
        "idade" => 35
    ];

    if(array_key_exists("nome", $arr)) {
        echo "A chave existe!";
    }

?>