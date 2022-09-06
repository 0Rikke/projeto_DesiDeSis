
use laravel;
drop table if exists livros;

create table livros(
id int not null auto_increment,
tipo varchar(255) not null,
nome varchar(255) not null,
autor varchar(255) not null,
editora varchar(255) not null,
publicacao date not null,
img varchar(255) not null,
descricao varchar(255) not null,
primary key (id)
);

create table pedidos(
id int not null auto_increment,
idUser int not null,
estatus enum('concluido','em andamento','cancelado')not null,
idLivro int not null,
primary key(id)
);

ALTER TABLE pedidos
ADD CONSTRAINT FK_PedidoLivro
FOREIGN KEY (idLivro) REFERENCES livros(id);
