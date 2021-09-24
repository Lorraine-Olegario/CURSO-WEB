<?php
    class Exemplo{

        private $var1;
        public $var2;
        static $var3;

        public function metodo(){

        }

        private function metodo2(){

        }

        public static function metodo3Statico(){
            echo"aqui tá o metodo static";
            echo"<br>";
        }
        
        public function setVar1($var1){
            $this->var1 = $var1;
        }

        public function pegaVar1(){
            return  $this->var1;
        }
    }


?>