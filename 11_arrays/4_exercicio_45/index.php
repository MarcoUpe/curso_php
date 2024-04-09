<?php

    $arr = range(10, 45); // cria intervalo de 10 até 45
    print_r($arr);
    echo "<br><br>";

    for($i = 0; $i < count($arr); $i++) { // percorre o array somando 6 em cada argumento
        $soma = $arr[$i] + 6;

        if($soma > 30) { // se for maior que 30 mostra a mensagem
            echo "O numero $soma eh muito alto <br>";

        } else { // caso não seja maior que trinta só mostra o numero + 6
            echo "$soma <br>";
        }
    }

?>