create database if not exists escala;

create table if not exists equipe(
    id int auto_increment not null,
    nome_equipe varchar(80) not null,
    primary key(id)
);

create table if not exists funcionario (
    matricula int not null,
    nome_funcionario varchar(80) not null,
    equipe int(20),
    primary key(matricula),
    foreign key(equipe) references equipe (id)
);

insert into funcionario (nome_funcionario, matricula) values ('vigilante 1','19899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 2','29899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 3','39899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 4','49899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 5','59899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 6','69899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 7','79899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 8','89899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 9','99899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 10','109899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 11','11899899');
insert into funcionario (nome_funcionario, matricula) values ('vigilante 12','12899899');