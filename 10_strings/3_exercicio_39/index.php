<?php

    $arr = [
        'porta' => 100,
        'macaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCarro($arr) {

        $arrItensCarros = [];

        foreach ($arr as $iten => $preco) {

            if($preco > 10) {
                array_push($arrItensCarros, $iten);
            }
        }
        return $arrItensCarros;
    }

    $novoArr = itensCarro($arr);

    print_r($novoArr);

?>