<?php
    $var1_a = 'localhost';
    $var1_b = 'modul_8_1';
    $var1_c = 'root1';
    $var1_d = '$TcCk21_17!';
    $conn = new PDO("mysql:host=$var1_a;dbname=$var1_b", $var1_c, $var1_d);

    // $sql1 = $conn->prepare("SELECT * FROM clientes ORDER BY cliente_cargo  DESC LIMIT 2,5");
    // $sql1->execute();
    // $sql11 = $sql1->fetchAll();
    // foreach($sql11 as $key => $value){
    //     echo $value['cliente_nome'];
    //     echo"<hr>";
    // }


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
