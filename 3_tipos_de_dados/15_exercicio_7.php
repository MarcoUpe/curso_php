<?php

    $pessoa = [
        'nome' => 'Marco',
        'idade' => 11,
        'sexo' => 'Masc',
        'profissao' => 'TI'
    ];

    $maioridade = 18;

    //desafio
    if($pessoa['idade'] >= $maioridade) {
        echo "A pessoa é maior de idade";
    }
    else echo "De menor!";
?>