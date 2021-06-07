create database escuela;
use escuela;

create table calificaciones(
	id int not null auto_increment primary key,
	cuenta varchar(8) not null,
	nombre varchar(50) not null,
	semestre varchar(10) not null,
	mate float not null,
	fisica float not null,
	ingles float not null,
	metodologia float not null,
	progra float not null,
	analisis float not null,
	internet float not null,
	parcial varchar(10) not null
);
