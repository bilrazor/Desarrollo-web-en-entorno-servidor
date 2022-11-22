create database restauracion;
use restauracion;
create table Restaurante(
    id integer primary key auto_increment,
    nombre varchar(30) not null,
    descripcion varchar(30) not null,
    direccion varchar(30) not null
);

create table Usuario (
    id integer primary key auto_increment,
    nombre varchar(30) not null,
    email varchar(100) not null,
    contraseña varchar(9) not null
);

insert into Restaurante (id,nombre,descripcion,direccion)VALUES("tortilla","un plato muy bueno","calle la paz");
insert into Restaurante (id,nombre,descripcion,direccion)VALUES("mariscos","un plato muy esqusito","calle jsuticia");
insert into Restaurante (id,nombre,descripcion,direccion)VALUES("tortilla","un plato muy bueno","calle gomez");


insert into Usuario (id,nombre, email,contraseña)VALUES("martin","martin@gmail.com","pepapig");
insert into Usuario (id,nombre, email,contraseña)VALUES("pepe","pepe@gmail.com","pepapig");
insert into Usuario (id,nombre, email,contraseña)VALUES("carl","carl@gmail.com","pepapig");
