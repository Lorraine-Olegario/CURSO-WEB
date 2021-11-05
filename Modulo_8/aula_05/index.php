<?php
    include('./../conexao_bd/cnx.php');

    // $sql1 = $conn->prepare("SELECT * FROM posts WHERE posts_categoria_id = ?");
    // $sql1->execute(array($_GET['posts_categoria_id']));
    // $sql11 = $sql1->fetchAll();

    // foreach($sql11 as $key => $value){
    //     echo'Titulo: '.$value['posts_titulo'];
    //     echo'<br>';
    //     echo'Noticia: '.$value['posts_conteudo'];
    //     echo'<hr><br>';
    // }

    // for($i=0;$i < count($sql11);$i++){
    //     echo'Titulo: '.$value['posts_titulo'];
    //     echo'<br>';
    //     echo'Noticia: '.$value['posts_conteudo'];
    //     echo'<hr><br>';
    // }


    // $sql1 = $conn->prepare("SELECT * FROM categorias");
    // $sql1->execute();
    // $sql11 = $sql1->fetchAll();

    // foreach($sql11 as $key => $value){
    //     $cat = $value['categoria_id'];
    //     echo'Exibindo Post de: '.$value['categoria_nome'];
    //     echo'<br>';
    //     $sql2 = $conn->prepare("SELECT * FROM posts WHERE posts_categoria_id = '$cat'");
    //     $sql2->execute();
    //     $sql22 = $sql2->fetchAll();
    //         foreach($sql22 as $key1 => $value1){
    //             echo'Titulo: '.$value1['posts_titulo'];
    //             echo'<br>';
    //             echo'Noticia: '.$value1['posts_conteudo'];
    //             echo'<hr><br>';
    //         }
    // }

    $sql1 = $conn->prepare("SELECT FROM posts INNER JOIN categorias ON posts.posts_categoria_id = categorias.categoria_id");
    $sql1->execute();
    $sql11 = $sql1->fetchAll();

    foreach($sql11 as $key => $value){
        echo'Exibindo Post de: '.$value['categoria_nome'];
        echo'<br>';
        echo'Titulo: '.$value['posts_titulo'];
        echo'<br>';
        echo'Noticia: '.$value['posts_conteudo'];
        echo'<hr><br>';
    }
?>