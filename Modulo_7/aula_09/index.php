<?php
    //CONTANTES
    class myclass{
        const Valor = 300;
        public function __construct(){
            echo self::Valor;
        }
    }

    new myclass;
    echo'<br>';
    echo myclass::Valor;


?>