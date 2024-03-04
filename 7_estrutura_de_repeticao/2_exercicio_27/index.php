<?php

$cont = 0;
$arr = ['Renan', 40, 20, 5.5, 'Jorge', 'Maria', 'Pedro', true, 6, 'teste'];
 
while ($cont < count($arr)) {
    if (is_string($arr[$cont])) {
        echo $arr[$cont] . "<br>";
    }
    $cont++;
}

?>