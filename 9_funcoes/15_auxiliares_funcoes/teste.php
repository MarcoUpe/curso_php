<?php
 
function countVowels($string) { // contar vogais 

    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    
        for ($i = 0; $i < strlen($string); $i++) {
            $char = strtolower($string[$i]);
            if (in_array($char, $vowels)) {
                $count++;
            }
        }
        return $count;
    }
 
    echo countVowels("Hello World");


?>