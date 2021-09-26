<?php
    include_once("class1.php");
    $teste = new Class1("Lorraine",20);

    echo $teste->getNome();
    echo'<br>';
    echo $teste->getIdade();
?>
