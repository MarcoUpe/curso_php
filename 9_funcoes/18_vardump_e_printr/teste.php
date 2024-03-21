<?php
 
    function isPrime($num){
 
        if($num < 2){
 
        return false;
        
        }
 
        for ($i = 2; $i <= sqrt($num); $i++){ // SQRT raiz quadrada
 
            if ($num % $i == 0){
 
                return false;
 
            }
        }
 
        return true;
 
    }
 
    //$resultado = IsPrime(2);
    //$resultado = IsPrime(10);
    $resultado = IsPrime(7);
 
    echo $resultado;
?>