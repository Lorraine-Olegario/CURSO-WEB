<?php
    include_once("./cnx.php");

    $conn->exec("LOCK TABLES clientes WRITE");
    sleep(10);

?>