CREATE DATABASE IF NOT EXISTS colorgrid;


use colorgrid;


drop table if exists colors;

create table colors(
    id int (11),
    kleuren varchar(11)
);

insert into colors (id, kleuren)
values (100, '#F60000'),
       (200, '#FF8C00'),
       (300, '#FFEE00'),
       (400, '#4DE94C'),
       (500, '#3783FF'),
       (600, '#4815AA');

select * from colors;