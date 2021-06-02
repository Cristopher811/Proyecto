CREATE TABLE alumnos(
	id int not null primary key auto_increment,
	cuenta varchar(8) not null,
	nombreCompleto varchar(50) not null,
	semestre varchar(10) not null
);

CREATE TABLE calificaciones(
	id int not null auto_increment primary key,
	cuenta varchar(8) not null,
	nombreCompleto varchar(50) not null,
	mate varchar(50) null,
	fisica int not null,
	ingles int not null,
	metodologia int not null,
	progra int not null,
	analisis int not null,
	internet int not null,
	parcial varchar(10) not null
);
