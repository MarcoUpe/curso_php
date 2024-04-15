<?php

    $pessoa = ["Marco", 29, "Programador", "Castanho"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa; // insere as variaveis do array para pessoa

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDosOlhos <br>";

?>