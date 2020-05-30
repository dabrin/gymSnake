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
nombre_tipo_clase varchar(300) not null,
descripcion varchar(500)
);


create table clase(
id_clase int auto_increment primary key,
id_tipo_clase int not null,
fecha date,
hora_ini datetime,
hora_fin datetime,
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
fecha date,
hora_ini datetime,
hora_fin datetime,
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