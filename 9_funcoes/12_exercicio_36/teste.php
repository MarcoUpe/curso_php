<?php
 
    function sumEvenNumbers($n) {
        if ($n <= 0) {
            return 0;
        }
 
        $sum = 0;
 
        for ($i = 2; $i <= $n; $i += 2) {
            $sum += $i;
        }
        return $sum;
    }
 
    $number = 10;
    $result = sumEvenNumbers($number);
    echo "A soma dos números pares de 1 até $number é: $result";

?>