CREATE DATABASE IF NOT EXISTS bestevaer;


use bestevaer;


drop table if exists schepen;

create table schepen(
    naam varchar(30),
    id int (11),
    volume int(11),
    gewicht int(11)
);

insert into schepen (naam, id, volume, gewicht)
values ( 'athens glory' , 100, 1500 , 80),
       ('apostolos II' ,  200, 1500 , 60),
       ('hmm le havre' ,  300, 2500 , 40);

select * from schepen;