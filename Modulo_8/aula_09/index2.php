<?php
    include_once("./cnx.php");

    $sql1 = $conn->prepare("SELECT * FROM clientes INNER JOIN cargo ON `cargo`.`cargo_id` = `clientes`.`cliente_cargo`");
    $sql1->execute();
    $sql11 = $sql1->fetchAll();
    foreach($sql11 as $key => $value){
        echo $value['cliente_nome'];
        echo' | ';
        echo $value['cargo_nome'];
        echo"<hr>";
    }


?>