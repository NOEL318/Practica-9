
create database if not exists practica9;
use practica9;
create table if not exists Producto (
id_producto varchar(20) not null primary key,
nombre varchar(200) not null,
cantidad int not null,
precio_compra float not null,
precio_venta float not null
)
engine=InnoDB;
create table if not exists Proveedor (
id_proveedor varchar(20) not null primary key,
Nombre varchar (40) not null,
Telefono varchar(20) not null,
Empresa varchar (100) not null,
Email varchar (40) not null
)
engine=InnoDB;
create table if not exists Compra (
id_compra varchar(10) not null primary key,
fecha date not null,
id_producto varchar (10) not null,
id_proveedor varchar(10) not null,
constraint id_proveedor foreign key (id_proveedor) references Proveedor
(id_proveedor) on update cascade on delete cascade,
constraint id_producto foreign key (id_producto) references Producto
(id_producto) on update cascade on delete cascade
);
