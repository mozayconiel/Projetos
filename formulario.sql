create database formulario;


use formulario;


create table clientes(
Id INT auto_increment primary key,
nome VARCHAR(100) not null,
email VARCHAR(100) not null,
telefone VARCHAR(15) not null,
sexo VARCHAR(15) not null,
data_nasc DATE not null,
cidade VARCHAR(100) not null,
estado VARCHAR(100) not null,
endereco VARCHAR(255) not null
);


select * from clientes;


    
SELECT DISTINCT 
DATE_FORMAT(data_nasc, '%d-%m-%y') 
AS data_nasc 
FROM clientes;



select @@lc_time_names;
set lc_time_names = 'pt_BR';

