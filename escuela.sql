CREATE TABLE alumnos{
	id int not null primary key auto_increment,
	cuenta varchar(8) not null,
	nombreCompleto varchar(50) not null,
	semestre varchar(10) not null
};

CREATE TABLE calificaciones{
	id int not null auto_increment primary key,
	cuenta varchar(8) not null,
	nombreCompleto varChar(50) not null,
	mate varvarChar(50) null,
	progra int not null
	parcial int not null
}
