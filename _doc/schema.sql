
create database laravel;
use laravel;
drop table if exists livros;

create table livros(
id int not null auto_increment,
tipo varchar(255) not null,
nome varchar(255) not null,
autor varchar(255) not null,
editora varchar(255) not null,
publicacao date not null,
descrição varchar(255) not null,
primary key (id)
);

