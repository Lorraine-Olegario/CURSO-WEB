<?php
    class Pessoa{
        private $nome = "lorraine";
        private $idade = "20";
        private $peso = "50kg";

        public function crescer(){
            echo 'estou crescendo';
            echo"<br>";
            $this->comer();
        }
        private function comer(){
            echo 'estou comento';
        }
    }

    #instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
?>