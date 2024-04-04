<?php

    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $testeEcontrar = strpos($str, "strpos"); // procura o argumento strpos na string
    echo "$testeEcontrar <br>";
    
    $testeEcontrar2 = strpos($str, "Java"); // procura o argumanto java mas não enconrta então não faz nada
    echo "$testeEcontrar2 <br>";
    if($testeEcontrar2 === false) { // caso não encontre FALSE entra no if
        echo "Palavra não econtrada <br>";
    }

    $palavra = "com";
    $testeEcontrar3 = strpos($str, $palavra); // procura o argumento COM na string
    echo "$testeEcontrar3 <br>";

    $palavra2 = "to";
    $testeEcontrar4 = strpos($str, $palavra2); // ele também pode pegar um pedaço da srting como argumento
    echo "$testeEcontrar4 <br>";

?>