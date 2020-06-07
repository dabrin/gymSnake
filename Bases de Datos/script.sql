create database ProyectoSnakeMoc;
use ProyectoSnakeMoc;

create table imagen(
id_img int auto_increment primary key not null,
url_img varchar(300) not null,
descripcion varchar(300) 
);

create table sobre_Nosotros(
contacto varchar(300),
direccion varchar(500),
redes_soc varchar(400)
);

create table persona(
id_persona int auto_increment primary key not null, 
nombre varchar(300) not null,
telefono varchar(8) not null
);

create table tipo_clase(
id_tipo_clase int not null auto_increment primary key,
icono varchar(200),
nombre_tipo_clase varchar(300) not null,
descripcion varchar(500)
);

alter table tipo_clase
  add icono varchar(200) not null;
  

create table tips_entrenamiento (
id_tips_entrenamiento int not null auto_increment primary key,
imagen varchar(300),
titulo varchar(300) not null,
descripcion varchar(1000)
);


create table clase(
id_clase int auto_increment primary key,
id_tipo_clase int not null,
fecha date,
hora_ini varchar(100),
hora_fin varchar(100),
instructor varchar(500),
cupos int,
constraint foreign key(id_tipo_clase)references tipo_clase(id_tipo_clase)
);


create table comprobante(
id_comprobante int auto_increment primary key,
id_clase int not null,
id_persona int not null,
nombre_tipo_clase varchar(300),
constraint foreign key(id_clase) references clase(id_clase),
constraint foreign key(id_persona) references persona(id_persona)
);

create table pesas(
id_pesas int not null auto_increment primary key,
grupo varchar (20),
fecha date,
hora_ini varchar (50),
hora_fin varchar (50),
cupos int not null
);

create table persona_pesas(
	id_persona int not null,
	id_pesas int not null,
	constraint foreign key(id_persona) references persona(id_persona),
	constraint foreign key(id_pesas) references pesas(id_pesas)
);

create table persona_clase(
	id_persona int not null,
    id_clase int not null,
    constraint foreign key(id_persona) references persona(id_persona),
    constraint foreign key(id_clase) references clase(id_clase)
);

create table administrador(
id_admin int auto_increment primary key not null, 
usuario_admin varchar(300) not null,
contrasena varchar(100) not null
);


-- ------------------------------- PROCEDIMIENTOS ALMACENADOS -------------------------------

-- SP para el login
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `login`(user_ varchar(300), pass_ varchar(100))
BEGIN
	select id_admin from administrador where usuario_admin=user_ && contrasena=pass_;
END
DELIMITER ;

-- SP para listar las clases
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_listar_clases`()
BEGIN
	Select * from clase c
    JOIN tipo_clase tc
    ON c.id_tipo_clase = tc.id_tipo_clase;
END
DELIMITER ;


-- SP listar las personas de cada clase
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_listar_persona_clase`()
BEGIN
select nombre,telefono 
from persona
 join persona_clase 
 on persona.id_persona= persona_clase.id_persona;
END
DELIMITER ;


-- SP para listar los clientes
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_listarClientes`()
BEGIN
	SELECT * FROM persona;
END
DELIMITER ;


-- SP para insertar los clientes
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_ingresar_clientes`(nombre_ varchar(100), telefono_ varchar(8), id_clase_ int)
BEGIN
	INSERT INTO persona (nombre,telefono)
    values (nombre_,telefono_);
    INSERT INTO persona_clase (id_persona , id_clase)
    values(LAST_INSERT_ID(),id_clase_);
END
DELIMITER ;


-- SP para insertar los clientes
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_ingresar_clientes`(nombre_ varchar(100), telefono_ varchar(8), id_clase_ int)
BEGIN
	INSERT INTO persona (nombre,telefono)
    values (nombre_,telefono_);
    
    INSERT INTO persona_clase (id_persona , id_clase)
    values(LAST_INSERT_ID(),id_clase_);
	
    UPDATE clase
	SET cupos = cupos-1
	WHERE id_clase_=clase.id_clase;

    
END

DELIMITER ;


-- SP listar las personas de cada clase
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_listar_persona_clase`(id_clase_ int)
BEGIN
select nombre,telefono from persona join persona_clase on persona.id_persona= persona_clase.id_persona 
where id_clase_ = persona_clase.id_clase;
END
DELIMITER ;

-- SP listar las personas de tipo de clase
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_listar_tipo_clases`()
BEGIN
	Select id_tipo_clase,nombre_tipo_clase, descripcion, icono from tipo_clase;
END
DELIMITER ;

-- ------------------------------- PROCEDIMIENTOS ALMACENADOS -------------------------------


-- ------------------------------- TRIGGER -------------------------------

DELIMITER $$

CREATE TRIGGER restar_cupos_clase AFTER INSERT ON persona
FOR EACH ROW
Update clase set cupos = cupos -1

DELIMITER ;
 

DROP TRIGGER restar_cupos_clase;

-- ------------------------------- TRIGGER -------------------------------




SELECT * FROM persona;

Insert into persona (nombre,telefono) values ('PruebaCupos','987621');

insert into tipo_clase (nombre_tipo_clase,descripcion)
values ('Clase de Boxing','Clase para romper hocicos ');






update tipo_clase
set descripcion =  'Crossfit se define como un sistema de entrenamiento de fuerza y acondicionamiento, basado en ejercicios funcionales
              constantemente variados y realizados a una alta intensidad.'
where id_tipo_clase = 1;

update tipo_clase
set nombre_tipo_clase = 'Crossfit',
			    icono = 'flaticon-weightlifter'

where id_tipo_clase = 1;


update tipo_clase
set descripcion = 'Functional es un entrenamiento personal muy efectivo, en el que se adaptan los ejercicios a las necesidades personales
              orientado a mejorar las funciones diarias y a aumentar la calidad de vida de quienes lo practican.',
              			    icono = 'flaticon-exercise'

where id_tipo_clase = 2;
select * from tipo_clase;

update tipo_clase
set descripcion = 'En esta sección podrá seleccionar el horario en el que desea reservar su espacio. En nuestra
              sala de pesas contamos con gran cantidad de máquinas y equipo para que pueda realizar sus ejercicios de 
              la mejor manera.' ,
			    icono = 'flaticon-woman'

where id_tipo_clase = 3;

update tipo_clase
set descripcion = 'Functional es un entrenamiento personal muy efectivo, en el que se adaptan los ejercicios a las necesidades personales
              orientado a mejorar las funciones diarias y a aumentar la calidad de vida de quienes lo practican.',
	nombre_tipo_clase = 'Functional Boxing',
    icono = 'flaticon-boxing'
where id_tipo_clase = 4;


update tipo_clase
set descripcion = ''
where id_tipo_clase = 2;



select * from clase;

update clase 
set cupos=2
where id_clase=7;

insert into clase (id_tipo_clase,fecha,hora_ini,hora_fin,instructor,cupos)
values (4,sysdate(),'3:00 pm','4:00 pm','Héctor',20);

insert into clase (id_tipo_clase,instructor,fecha,hora_ini,hora_fin,cupos)
values (3,'Grupo 1',sysdate(),'5:00 am','6:30 am',15),
		(3,'Grupo 2',sysdate(),'6:30 am','8:00 am',15),
        (3,'Grupo 3',sysdate(),'8:00 am','9:30 am',15),
        (3,'Grupo 4',sysdate(),'9:30 am','11:00 am',15),
        (3,'Grupo 5',sysdate(),'11:00 am','12:30 pm',15),
        (3,'Grupo 6',sysdate(),'12:30 pm','2:00 pm',15),
        (3,'Grupo 7',sysdate(),'2:00 pm','3:30 pm',15),
        (3,'Grupo 8',sysdate(),'3:30 pm','5:00 pm',15),
        (3,'Grupo 9',sysdate(),'5:00 pm','6:30 pm',15),
        (3,'Grupo 10',sysdate(),'6:30 pm','8:00 pm',15),
        (3,'Grupo 11',sysdate(),'8:00 pm','9:30 pm',15);
        
        select * from clase;

call sp_listar_clases;
select * from persona; 
select * from persona_clase; 

insert into pesas (grupo,fecha,hora_ini,hora_fin,cupos)
values ('Grupo 1',sysdate(),'5:00 am','6:30 am',15),
		('Grupo 2',sysdate(),'6:30 am','8:00 am',15),
        ('Grupo 3',sysdate(),'8:00 am','9:30 am',15),
        ('Grupo 4',sysdate(),'9:30 am','11:00 am',15),
        ('Grupo 5',sysdate(),'11:00 am','12:30 pm',15),
        ('Grupo 6',sysdate(),'12:30 pm','2:00 pm',15),
        ('Grupo 7',sysdate(),'2:00 pm','3:30 pm',15),
        ('Grupo 8',sysdate(),'3:30 pm','5:00 pm',15),
        ('Grupo 9',sysdate(),'5:00 pm','6:30 pm',15),
        ('Grupo 10',sysdate(),'6:30 pm','8:00 pm',15),
        ('Grupo 11',sysdate(),'8:00 pm','9:30 pm',15);
        
        select * from pesas;



