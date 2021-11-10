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
