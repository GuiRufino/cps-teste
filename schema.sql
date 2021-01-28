create database escala;

create table funcionario (
    matricula int not null,
    nome varchar(80) not null,
    equipe int,
    primary key(matricula)
);

create table equipe(
    id int auto_increment not null,
    nome varchar(80) not null,
    primary key(id)
);
