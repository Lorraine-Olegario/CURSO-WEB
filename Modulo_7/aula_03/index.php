<?php
   final class Filha{//não pode ser herdada quando se tem final
       public function mostrarOla(){
           echo 'ola mundo';
       }
   }
   
   class Filho{
        public function mostrarOlaFilho(){
            echo 'ola mundo 2';
            echo'<br>';
            $this->funcaoTeste1();// função private só pode ser chamada dentro da mesma class
        }
        
        protected function funcaoTeste(){
            echo 'chamando função teste';
        }

        private function funcaoTeste1(){
            echo 'chamando função teste 1 ';
        }
    }

   class Pai extends Filho{//class pai herda tudo da class filho
        public function mostrarOlaFilho(){//
            parent::mostrarOlaFilho();//cahamr a função original
            echo'<br>';
            echo 'Nova função OLA';            
        }

        public function mostrarTchau(){
            echo 'Tchau Mundo!';
            echo'<br>';
            $this->funcaoTeste();
           
        }
    }

    $pai = new Pai;
    $pai->mostrarTchau();

    echo'<br>';

    $filha = new Filha;
    $filha->mostrarOla();

    echo'<br>';

    $pai->mostrarOlaFilho();

?>