<?php

    function compararNumeros($a, $b) 
    {
        if ($a > $b) 
        {
            $msgMaior = "O primeiro número é maior.";
            return $msgMaior;
        }
        else if ($b > $a) 
        {
            $msgMenor = "O segundo número é maior.";
            return $msgMenor;
        } 
        else
        {
            return "Os números são iguais.";
        }
        
    }
    
    compararNumeros(50, 10);
    
    compararNumeros(5, 10);
    
    compararNumeros(5, 5);
    
?>

