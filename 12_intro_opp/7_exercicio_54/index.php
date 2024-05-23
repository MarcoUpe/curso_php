<?php

    class Pessoa {

        public $nome;
        public $idade;
        
        function andar($m) {
            echo "A pessoa andou $m metros <br>";
        }

    }

    $marco = new Pessoa;

    $marco -> nome = "Marco";
    $marco -> idade = 35;

    echo $marco -> nome . "<br>";
    echo $marco -> idade . "<br>"; 
    $marco -> andar(50);


    //////////////////////////////////////////
    $andrielly = new Pessoa;

    $andrielly -> nome = "Andrielly";
    $andrielly -> idade = 31;

    echo "O nome dela é $andrielly->nome e tem $andrielly->idade anos <br>";

    $andrielly-> andar(30);
    

?>