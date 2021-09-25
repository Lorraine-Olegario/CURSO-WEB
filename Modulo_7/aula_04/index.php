<?php
    abstract class test{// class ABSTRACT serve apenas para ser herdada não pode ser instanciada
        public function func(){
            echo 'chamando func1';
        }

        abstract function func2();
    }

    class Principal0{
        public static function Outrometodoestaico(){
            echo'outro metodo estatico';
        }
    }
    class Principal extends test{ // estou herdando na class principal a class test
        public function func2(){
            echo 'estou declarando uma função abstract eu sou obrigada a chmar ea aqui se for uma func abstrac herdada';
        }
        public static function metodoestatico(){
            echo 'metodo estatico';
        }
        public function func3(){
            Principal::metodoestatico();
            echo'<br>';
            self::metodoestatico();
            echo'<br>';
            Principal0::Outrometodoestaico();// trabalhando metodo estatico vindo de outra class
        }
    }

    $prin = new Principal;
    $prin->func();
    echo'<br>';
    $prin->func2();
    echo'<br>';
    $prin->func3();

?>