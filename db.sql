DROP DATABASE IF EXISTS rokomunitic;
CREATE DATABASE IF NOT EXISTS rokomunitic;
USE rokomunitic;

CREATE TABLE uzivatel (
	id INT AUTO_INCREMENT PRIMARY KEY,
    jmeno VARCHAR(255),
    prijmeni VARCHAR(255),
    stat VARCHAR(255),
    mesto VARCHAR(255),
    ulice VARCHAR(255),
    psc INT,
    pohlavi INT,
    datnaroz DATE,
    pojistovna VARCHAR(255),
    telefon INT,
    email VARCHAR(255),
    heslo VARCHAR(255)
);

CREATE TABLE doktor (
	iddoktor INT auto_increment primary key,
    jmeno VARCHAR(255),
    prijmeni VARCHAR(255),
    email VARCHAR(255),
    heslo VARCHAR(255)
);

CREATE TABLE konzultace (
	idkonzultace INT auto_increment primary key,
    uzivatel_id int,
    doktor_id int,
    popisprob VARCHAR(2500),
    vytvoreni timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (uzivatel_id) REFERENCES uzivatel(id),
    FOREIGN KEY (doktor_id) REFERENCES doktor(iddoktor)
);

CREATE TABLE konzultaceodpoved (
	idkonzultaceodpoved INT auto_increment primary key,
    odpoved VARCHAR(255),
    konzultace_id int,
    FOREIGN KEY (konzultace_id) REFERENCES konzultace(idkonzultace)
);

use rokomunitic;
Insert into uzivatel (jmeno, prijmeni, stat, mesto, ulice, psc, pohlavi, datnaroz, pojistovna, telefon, email, heslo)
Values ("Jan", "Novak", "CR", "Praha", "Prikopy", "99999", 1, "2000-11-30", "VZP", "123456789", "novak@seznam.cz", "novak");

use rokomunitic;
insert into doktor (jmeno, prijmeni, email, heslo)
values ("Pepek", "Namornik", "pepe@seznam.cz", "pepe")

