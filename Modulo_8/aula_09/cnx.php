<?php
    $var1_a = 'localhost';
    $var1_b = 'modul_8_1';
    $var1_c = 'root1';
    $var1_d = '$TcCk21_17!';
 
    try{
         $conn = new PDO("mysql:host=$var1_a;dbname=$var1_b", $var1_c, $var1_d,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
          echo 'error ao conectar';
    }


?>