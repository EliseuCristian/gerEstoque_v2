create database estoque;
use estoque;

create table cad(
id int primary key auto_increment, 
nome varchar(120) not null unique,
senha varchar(15) not null unique
);

create table prod_cad(
id int primary key auto_increment, 
nome_prod varchar(120) not null,
qtd_prod varchar(120), 
preco varchar(120)
);

select * from cad;	
select * from prod_cad;
