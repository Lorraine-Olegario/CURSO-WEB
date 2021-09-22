<?php
    echo"OOOOOO";
    class Pessoa{
        private $nome = "lorraine";
        private $idade = "20";
        private $peso = "50kg";

        private function crescer(){
            echo 'estou crescendo';
        }
        private function comer(){
            echo 'estou comento';
        }
    }

    #instanciar
    $pessoa = new Pessoa;



?>