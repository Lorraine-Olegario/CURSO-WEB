<?php
    //factory Desegn Pattern
    // class Dog{
    //     public function __construct(){
    //         echo 'class dog aqui <br>';
    //     }
    // }

    // class Cat{
    //     public function __construct(){
    //         echo 'class cat aqui <br>';
    //     }
    // }

    // new Dog;
    // new Cat;

    // class Animal{
    //     public static function build($name_class){
    //         if(class_exists($name_class)){
    //             return new $name_class;
    //         }else{
    //             die('Ops! a class no existe');
    //         }
    //     }       
    // }

    // Animal::build('Dog');
    // Animal::build('Fish');

    // echo'<hr/>';

    //Facde Patter -> uma unica class sera rewsponsavel por execultar todas ao ações sem a necessidade
    //de instanciar outras class

    class Carrinho{
        public function fecharCarrinho(){
            echo'carrinho fechado <br>';
        }
    }

    class Frete{
        public function calcularFrete(){
            echo'Frete calculado<br>';
        }
    }

    class Pedido{
        public function fecharPedido(){
            echo'pedidio recebido com sucesso<br>';
        }
    }

    class Loja{
        public function finalizarCompra(){
            // $carrinho = new Carrinho;
            // $carrinho->fecharCarrinho();
            // echo'<br>';
            // $frete = new Frete;
            // $frete->CalcularFrete();

            $this->fecharCarrinho();
            $this->calcularFrete();
            $this->fecharPedido();
        }
        public function fecharCarrinho(){
            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
        }
        public function calcularFrete(){
            $carrinho = new Frete();
            $carrinho->calcularFrete();
        }
        public function fecharPedido(){
            $carrinho = new Pedido();
            $carrinho->fecharPedido();
        }

    }

    $loja = new Loja;
    $loja->finalizarCompra();
?>