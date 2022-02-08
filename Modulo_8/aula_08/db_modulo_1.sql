create database modul_8_1;
use modul_8_1

SELECT * FROM clientes
SELECT * FROM cargo

create table clientes(
		cliente_id int primary key auto_increment,
        cliente_data datetime,
        cliente_nome text not null,
        cliente_cargo text not null
);

create table cargo(
	cargo_id int primary key auto_increment,
	cargo_data datetime,
	cargo_nome text not null
);