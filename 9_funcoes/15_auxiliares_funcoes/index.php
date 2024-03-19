<?php

    function soma($a, $b, $c) {

        print_r (func_get_args()); // mostra argumentos da funcao
        echo "<br>";

        echo func_num_args() . "<br>"; // contar argumentos do array

        return $a + $b;
    }

    soma(2, 4 ,6);

?>