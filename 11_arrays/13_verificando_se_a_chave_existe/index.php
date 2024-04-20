<?php

    $arr = [
        "nome" => "Marco",
        "idade" => 35
    ];

    if(array_key_exists("nome", $arr)) { // verifica se a chave existe no array
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if(array_key_exists("profissao", $arr)) {
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if(isset($arr ["nome"])) { // também verifica se a chave existe no array
        echo "A chave existe! ISSET <br>";
    } else {
        echo "A chave não existe! ISSET <br>";
    }

    if(isset($arr ["teste"])) { 
        echo "A chave existe! ISSET <br>";
    } else {
        echo "A chave não existe! ISSET <br>";
    }

    $x = 10;

    if(isset($x)) { // também pode verificar variavel
        echo "A VAR existe! ISSET <br>";
    } else {
        echo "A VAR não existe! ISSET <br>";
    }

    if(isset($y)) {
        echo "A VAR existe! ISSET <br>";
    } else {
        echo "A VAR não existe! ISSET <br>";
    }



?>