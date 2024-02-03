CREATE DATABASE IF NOT EXISTS GerenciamentoDeTarefas 
    character set utf8;
USE GerenciamentoDeTarefas;

create table user(
    userId int not null auto_increment primary key,
    userName varchar(100) not null,
    password varchar(32) not null,
    email varchar(100) not null
);

create table status(
    statusId int not null primary key auto_increment,
    stage varchar(50) not null
);

create table notepad(
    noteId int not null auto_increment primary key,
    title varchar(50) not null,
    description text not null,
    statusId int not null,
    userId int not null,
    foreign key (statusId) references status (statusId),
    foreign Key (userId) references user(userId)
);

create table checkList(
    listId int not null auto_increment primary key,
    item text not null,
    statusId int not null,
    noteId int not null,
    foreign key (statusId) references status (statusId),
    foreign key (noteId) references notepad (noteId)
);


insert into status values
(DEFAULT,"Incomplete"),
(DEFAULT,"Started"),
(DEFAULT,"Completed");

insert into user values 
(DEFAULT, "frist", 123, "test@test.com");

insert into notepad values 
(DEFAULT, "frist", "frist test using this database", "1", "1");

select * from notepad
inner join status on (notepad.statusId = status.statusId);

insert into checkList values
(DEFAULT, "fazer café", "1", "1"),
(DEFAULT, "torada", "1", "1"),
(DEFAULT, "maça", "1", "1");

-- drop DATABASE GerenciamentoDeTarefas;