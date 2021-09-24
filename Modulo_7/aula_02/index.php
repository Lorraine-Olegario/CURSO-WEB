<?php
    include("exe.class.php");
    $exemplo = new Exemplo();

    $exemplo->var2 = "Lorraine";
    echo $exemplo-> var2;
    echo"<br>";

    $exemplo2 = new Exemplo();
    $exemplo2->var2 = "João";
    echo $exemplo2->var2;
    echo"<br>";

    //variavel static não é preciso criar uma instancia
    Exemplo::$var3 = "Maria";
    echo Exemplo::$var3;
    echo"<br>";

    //chamar metodo static
    Exemplo::metodo3Statico();

    $exemplo->setVar1("Makaylla");
    echo $exemplo->pegaVar1();
    echo"<br>";
    $exemplo2->setVar1("Jessica");
    echo $exemplo2->pegaVar1();
    echo"<br>";

    
?>