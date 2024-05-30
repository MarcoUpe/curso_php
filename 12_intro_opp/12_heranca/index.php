<?php

    class Humano {

        public $idade = 35;

        public function falar() {
            echo "Olá Mundo! <br>";
        }

        private function gritar() {
            echo "PHP EH MUITO BOM! <br>";
        }

        public function acessarGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "Psiuuu <br>";
        }

        public function acessaFalarBaixinho() {
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {

        // funcao de haranca consegue acessar funcao protegida
        public function acessarFalarBaixinhoProgramador() {
            $this->falarBaixinho();
        }
    }

    // ze eh um novo humano 
    $ze = new Humano;

    $ze->falar();
    $ze->acessarGritar();
    $ze->acessaFalarBaixinho();

    // marco eh um novo programador que herda as funcoes de humano
    $marco = new Programador;

    echo $marco->idade. "<br>";

    $marco->falar();
    $marco->acessarGritar();

    $marco->acessarFalarBaixinhoProgramador();



?>