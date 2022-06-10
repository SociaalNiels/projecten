Create Database if not exists adreslijst;

use adreslijst;

Drop table if exists adressen2;

Create table adressen2 (

voornaam varchar(50),
achternaam varchar(50),
adres varchar(50),
huisnummer varchar(10),
woonplaats varchar(50),
postcode varchar(6)
);


SELECT * FROM `adressen2`

