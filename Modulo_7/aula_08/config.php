<?php
       
    function myAutoLoad($class){
        $class = str_replace('\\','/',$class,);
        echo $class.'<br>';
        if(file_exists('./class/'.$class.'.php')){
            include('./class/'.$class.'.php');
        }
    }

    spl_autoload_register('myAutoLoad');// Registra a função dada como implementação de __autoload()

?>