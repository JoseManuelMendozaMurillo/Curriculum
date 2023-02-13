Create Database REDI;

Use REDI; 

Create Table DatosPersonales(
	id int not null primary key auto_increment,
    nombre varchar(20),
    apellidoPaterno varchar(20),
    apellidoMaterno varchar(20),
    fechaNacimiento date,
    domicilio varchar(40),
    numTelefono varchar(10),
    correo varchar(40)
) default charset = "utf8mb4";

Insert Into datospersonales Values (
default,
"Jose Manuel", "Mendoza", "Murillo", 
"01/12/2001", 
"Pablo Lopez #87 COL El Trompo Jamay, Jalisco",
 "3921279642", 
 "jose_manuel_mendoza_murillo@outlook.es");
 
 Select * from datosPersonales;