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

-- SP para borrar los clientes y sumar un cupo
DELIMITER $$
CREATE DEFINER=`laboratorios`@`%` PROCEDURE `sp_borrar_cliente`( id int)
BEGIN
set @id_clase_ :=(select id_clase from persona_clase where persona_clase.id_persona=id);
update clase 
set cupos=cupos+1
where id_clase=@id_clase_;

DELETE FROM persona_clase 
WHERE id_persona = id;

DELETE FROM persona
WHERE id_persona = id;
END
DELIMITER;
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

INSERT INTO CLASE (id_tipo_clase,fecha,hora_ini,hora_fin,instructor,cupos)
VALUES
-- Clases de Crossfit
('1',sysdate(),'9:10 am','10:10 am','Randall',10),
('1',sysdate(),'9:10 am','10:10 am','Randall',10),
('1',sysdate(),'9:10 am','10:10 am','Randall',10),
('1',sysdate(),'9:10 am','10:10 am','Randall',10),
('1',sysdate(),'9:10 am','10:10 am','Randall',10),

('1',sysdate(),'7:20 pm','8:20 pm','Randall',10),
('1',sysdate(),'7:20 pm','8:20 pm','Randall',10),
('1',sysdate(),'7:20 pm','8:20 pm','Randall',10),
('1',sysdate(),'7:20 pm','8:20 pm','Randall',10),
('1',sysdate(),'7:20 pm','8:20 pm','Randall',10),

-- Clases de Funcional
('2',sysdate(),'8:00 am','9:00 am','Randall',18),
('2',sysdate(),'8:00 am','9:00 am','Randall',18),
('2',sysdate(),'8:00 am','9:00 am','Randall',18),

('2',sysdate(),'3:00 pm','4:00 pm','Randall',18),
('2',sysdate(),'3:00 pm','4:00 pm','Randall',18),
('2',sysdate(),'3:00 pm','4:00 pm','Randall',18),
('2',sysdate(),'3:00 pm','4:00 pm','Randall',18),

('2',sysdate(),'5:00 pm','6:00 pm','Randall',18),
('2',sysdate(),'5:00 pm','6:00 pm','Randall',18),
('2',sysdate(),'5:00 pm','6:00 pm','Randall',18),

('2',sysdate(),'6:10 pm','7:10 pm','Randall',18),
('2',sysdate(),'6:10 pm','7:10 pm','Randall',18),
('2',sysdate(),'6:10 pm','7:10 pm','Randall',18),
('2',sysdate(),'6:10 pm','7:10 pm','Randall',18),
('2',sysdate(),'6:10 pm','7:10 pm','Randall',18),

-- Clases de Boxing
('4',sysdate(),'8:00 am','9:00 am','Héctor',18),
('4',sysdate(),'8:00 am','9:00 am','Héctor',18),
('4',sysdate(),'5:00 pm','5:00 pm','Héctor',18),
('4',sysdate(),'5:00 pm','5:00 pm','Héctor',18),

-- Sala de pesas
(3,sysdate(),'5:00 am','6:30 am','Grupo 1',15),
(3,sysdate(),'6:30 am','8:00 am','Grupo 2',15),
(3,sysdate(),'8:00 am','9:30 am','Grupo 3',15),
(3,sysdate(),'9:30 am','11:00 am','Grupo 4',15),
(3,sysdate(),'11:00 am','12:30 pm','Grupo 5',15),
(3,sysdate(),'12:30 pm','2:00 pm','Grupo 6',15),
(3,sysdate(),'2:00 pm','3:30 pm','Grupo 7',15),
(3,sysdate(),'3:30 pm','5:00 pm','Grupo 8',15),
(3,sysdate(),'5:00 pm','6:30 pm','Grupo 9',15),
(3,sysdate(),'6:30 pm','8:00 pm','Grupo 10',15),
(3,sysdate(),'8:00 pm','9:30 pm','Grupo 11',15);

delete  from clase  where id_tipo_clase=4;
select * from clase where cupos= 0;
UPDATE clase set cupos = 1 WHERE id_clase = 92; 
select * from persona;
select * from tipo_clase;

call sp_listar_persona_clase(100);
call obtener_clase_id(100);
call sp_borrar_cliente(8);
call sp_listar_persona_clase(92);

select * from clase where id_clase = 92;

select * from persona;

SET @Var1:= (SELECT MAX(Colm1) FROM TablaA);

set @var1 := (select nombre from persona where id_persona =1 );

select nombre from  persona
where nombre = @var1;

