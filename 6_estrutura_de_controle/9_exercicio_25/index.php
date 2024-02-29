<?php

    // variaveis
    $int1 = 60;
    $int2 = 10;
    $int3 = 15;

    $str1 = "Marco";
    $str2 = "Brayner";
    $str3 = "Teste";

    if(is_int($int1)) { // validação se eh inteiro
        
        $num = $int1 * 2; // se for multiplica por 2

        if ($num >= 100) { //valida se eh maior que 100
            echo " $int1 * 2 = $num (eh maior que 100) 1 <br>";
        } else {
            echo " $int1 * 2 = $num (não eh maior que 100) 1 <br>";
        }
    } else {
        echo " $int1 não eh numero! 1 <br>";
    }

    if(is_int($str1)) {
        
        $num = $str1 * 2;

        if ($num >= 100) {
            echo " $str1 * 2 = $num (eh maior que 100) 2 <br>";
        } else {
            echo " $str1 * 2 = $num (não eh maior que 100) 2 <br>";
        }
    } else {
        echo " $str1 não eh numero! 2 <br>";
    }    

    if(is_int($int2)) {
        
        $num = $int2 * 2;

        if ($num >= 100) {
            echo " $int2 * 2 = $num (eh maior que 100) 3 <br>";
        } else {
            echo " $int2 * 2 = $num (não eh maior que 100) 3 <br>";
        }
    } else {
        echo " $int2 não eh numero! 3 <br>";
    }

    if(is_int($str2)) {
        
        $num = $str2 * 2;

        if ($num >= 100) {
            echo " $str2 * 2 = $num (eh maior que 100) 4 <br>";
        } else {
            echo " $str2 * 2 = $num (não eh maior que 100) 4 <br>";
        }
    } else {
        echo " $str2 não eh numero! 4 <br>";
    }

    if(is_int($int3)) {
        
        $num = $int3 * 2;

        if ($num >= 100) {
            echo " $int3 * 2 = $num (eh maior que 100) 5 <br>";
        } else {
            echo " $int3 * 2 = $num (não eh maior que 100) 5 <br>";
        }
    } else {
        echo " $int3 não eh numero! 5 <br>";
    }

    if(is_int($str3)) {
        
        $num = $str3 * 2;

        if ($num >= 100) {
            echo " $str3 * 2 = $num (eh maior que 100) 6 <br>";
        } else {
            echo " $str3 * 2 = $num (não eh maior que 100) 6 <br>";
        }
    } else {
        echo " $str3 não eh numero! 6 <br>";
    }


?>