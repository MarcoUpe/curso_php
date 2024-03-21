<?php
    function sumDigits($number) {

        $sum = 0;
        $number = abs($number); // ABS converte em positivo

        while ($number > 0) {
            $digit = $number % 10; // pega o ultimo numero e guarda na soma
            $sum += $digit; // incrementa os numeros
            $number = (int)($number / 10);
        }
    
        return $sum;
    }

    echo sumDigits(15);

?>