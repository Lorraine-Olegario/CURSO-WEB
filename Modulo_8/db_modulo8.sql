create database modulo8

use modulo8;

select * from clientes;



INSERT INTO `modulo8`.`clientes` (`clinete_id`, `clinete_data`, `clinete_nome`, `clinete_sobrenome`) VALUES ('1', '2021-10-05 06:23:59', 'Lorraine', 'Olegario');




create table clientes(
		cliente_id int primary key auto_increment,
        cliente_data datetime,
        cliente_nome text not null,
        cliente_sobrenome text not null
);