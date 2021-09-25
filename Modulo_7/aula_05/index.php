<?php
    include_once("interface.php");

    class Teste implements Interface01{
        public function printOnScreen($impar){
            echo $impar;
        }
    }

    $t = new Teste;
    $t->printOnScreen('Ola mundo');
?>