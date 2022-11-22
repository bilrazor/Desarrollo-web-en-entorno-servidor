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
    email varchar(30) not null unique,
    contraseña varchar(9) not null
);

insert into Restaurante values("tortilla","un plato muy bueno","calle la paz");
insert into Restaurante values("mariscos","un plato muy esqusito","calle jsuticia");
insert into Restaurante values("tortilla","un plato muy bueno","calle gomez");


insert into Usuario values("martin","martin@gmail.com","1234");
insert into Usuario values("pepe","pepe@gmail.com","1234");
insert into Usuario values("carl","carl@gmail.com","1234");
