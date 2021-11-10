create database if not exists infoii;
use infoii;
create table if not exists infodb
(
	id int primary key auto_increment,
	stud varchar(20) DEFAULT null,
	sala varchar(5) DEFAULT null,
	datan varchar(10) DEFAULT null,
	nota_db int DEFAULT null,
	nota_so int DEFAULT null,
	nota_daw int DEFAULT null
);

create database if not exists dass;
use dass;

create table if not exists angajati (
    id_angajat int primary key auto_increment,
    angajat text(35),
    adresa text(35),
    telefon text(13),
    data_angajare text(35),
    specializare text(35)
);

create table if not exists clienti (
    id_client int primary key auto_increment,
    client text(35),
    adresa text(35),
    telefon text(13),
    email text(35),
    website text(35),
    observatii text(35)
);

create table if not exists reparatii (
    id_reparatie int primary key auto_increment,
    data_reparatie date,
    reparatie text(35),
    an_fabricatie date,
    diagnostic text(35),
    tarif int(5),
    id_angajat int(2) not null,
    id_client int(4) not null,
    constraint `fk_angajat_reparatie`
        foreign key (id_angajat) references angajati (id_angajat)
            on delete cascade
            on update restrict,

    constraint `fk_client_reparatie`
        foreign key (id_client) references clienti (id_client)
            on delete cascade
            on update restrict
);
