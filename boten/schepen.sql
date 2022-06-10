CREATE DATABASE IF NOT EXISTS bestevaer;


use bestevaer;


drop table if exists schepen;

create table schepen(
    id int (11),
    naam varchar(30),
    gewicht int(11),
    volume int(11)
);

insert into schepen (id, naam, gewicht, volume)
values (100, 'athens glory' , 1500 , 80),
       (100, 'apostolos II' , 1500 , 60),
       (200, 'hmm le havre' , 2500 , 40);

select * from schepen;