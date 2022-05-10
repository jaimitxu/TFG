<<<<<<< HEAD:symfonyTicketsDB.sql
DROP DATABASE IF EXISTS SymfonyTickets;

CREATE DATABASE SymfonyTickets;

USE SymfonyTickets;

/* Por si necesitamos saberlo */
CREATE TABLE Pais(
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255),
	Codigo VARCHAR(3),
	PRIMARY KEY (Id) 
);

CREATE TABLE Usuarios (
 Id int UNSIGNED NOT NULL AUTO_INCREMENT,
 DNI VARCHAR(9) NOT NULL,
 Nombre VARCHAR(255) NOT NULL,
 Apellido VARCHAR(255) NOT NULL,
 Apellido2 VARCHAR(255),
 Correo VARCHAR(255) NOT NULL,
 Contraseña VARCHAR(255) NOT NULL,
 Direccion VARCHAR(255),
 Pais_id INT UNSIGNED NOT NULL,
 Telefono INT,
 Boletin BOOLEAN,
  PRIMARY KEY(Id),
  FOREIGN KEY (Pais_id) REFERENCES Pais(Id)
);


CREATE TABLE Evento (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Tipo VARCHAR(255), /* Probablemente enum */
	Entradilla VARCHAR(255),
	Descripcion LONGTEXT,
	Imagen BLOB,
	Cartel LONGBLOB,
	Empresa_id INT UNSIGNED,
	fecha_inicio DATETIME NOT NULL,
	fecha_fin DATETIME NOT NULL,
	Duracion INT UNSIGNED , /*minutos */
	Fecha_creacion DATETIME,
	PRIMARY KEY (id)
);


CREATE TABLE Salas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255) NOT NULL,
	Capacidad INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id)
);



CREATE TABLE Zonas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255) NOT NULL,
	Sala_id INT UNSIGNED NOT NULL,
	/* Puertas? */
	PRIMARY KEY (Id),
   FOREIGN KEY (Sala_id) REFERENCES Salas(Id)
);


CREATE TABLE Butacas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Fila INT UNSIGNED,
	Columna INT UNSIGNED,
	Zona_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id),
   FOREIGN KEY (Zona_id) REFERENCES Zonas(Id)
	);
	

CREATE TABLE Artistas(
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255),
	Genero_musical VARCHAR(255),
	/* Tags? (rock, pop, danza, regueton, rap, clasica, etc...)*/
	Descripcion LONGTEXT,
	Notas LONGTEXT,
	PRIMARY KEY (Id)
	);


CREATE TABLE Promocion (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255) NOT NULL,
	DescuentoPorcentaje INT(3) NOT NULL, /* Descuento porcentual de la promocion (si hubiese descuento porcentual) */ 
	DescuentoBase INT NOT NULL, /* Descuento plano de la promocion */
	PRIMARY KEY (Id)
);



CREATE TABLE TipoEntrada (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Tipo VARCHAR(255) NOT NULL,
	PrecioBase INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id)
);
	

CREATE TABLE Entradas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Usuario_id INT UNSIGNED NOT NULL, /* un usuario puede haber comprado vaarias entradas*/ 
	TipoEntrada_id INT UNSIGNED NOT NULL,
	Promocion_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id),
   FOREIGN KEY (Usuario_id) REFERENCES Usuarios(Id),
   FOREIGN KEY (TipoEntrada_id) REFERENCES TipoEntrada(Id),
   FOREIGN KEY (Promocion_id) REFERENCES Promocion(Id)
	
);



/* Por si necesitasemos saberlo */
CREATE TABLE Provincia (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255),
	CodigoPostal INT UNSIGNED,
	PRIMARY KEY(Id)
);



=======
DROP DATABASE if exists SymfonyTickets;

CREATE DATABASE SymfonyTickets;

USE SymfonyTickets;

/* Por si necesitamos saberlo */
CREATE TABLE Pais(
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255),
	Codigo VARCHAR(3),
	PRIMARY KEY (Id) 
);

CREATE TABLE Usuarios (
 Id int UNSIGNED NOT NULL AUTO_INCREMENT,
 DNI VARCHAR(9) ,
 Nombre VARCHAR(255) NOT NULL,
 Apellido VARCHAR(255),
 Apellido2 VARCHAR(255),
 Correo VARCHAR(255) NOT NULL unique,
 Contrasena VARCHAR(255) NOT NULL,
 Direccion VARCHAR(255),
 Pais_id INT UNSIGNED,
 Telefono INT,
 Boletin BOOLEAN,
 Roles VARCHAR(255),
  PRIMARY KEY(Id),
  FOREIGN KEY (Pais_id) REFERENCES Pais(Id)
);


CREATE TABLE Evento (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Tipo VARCHAR(255), /* Probablemente enum */
	Entradilla VARCHAR(255),
	Descripcion LONGTEXT,
	Imagen BLOB,
	Cartel LONGBLOB,
	Empresa_id INT UNSIGNED,
	fecha_inicio DATETIME NOT NULL,
	fecha_fin DATETIME NOT NULL,
	Duracion INT UNSIGNED , /*minutos */
	Fecha_creacion DATETIME,
	PRIMARY KEY (id)
);


CREATE TABLE Salas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255) NOT NULL,
	Capacidad INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id)
);



CREATE TABLE Zonas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255) NOT NULL,
	Sala_id INT UNSIGNED NOT NULL,
	/* Puertas? */
	PRIMARY KEY (Id),
   FOREIGN KEY (Sala_id) REFERENCES Salas(Id)
);


CREATE TABLE Butacas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Fila INT UNSIGNED,
	Columna INT UNSIGNED,
	Zona_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id),
   FOREIGN KEY (Zona_id) REFERENCES Zonas(Id)
	);
	

CREATE TABLE Artistas(
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255),
	Genero_musical VARCHAR(255),
	/* Tags? (rock, pop, danza, regueton, rap, clasica, etc...)*/
	Descripcion LONGTEXT,
	Notas LONGTEXT,
	PRIMARY KEY (Id)
	);


CREATE TABLE Promocion (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255) NOT NULL,
	DescuentoPorcentaje INT(3) NOT NULL, /* Descuento porcentual de la promocion (si hubiese descuento porcentual) */ 
	DescuentoBase INT NOT NULL, /* Descuento plano de la promocion */
	PRIMARY KEY (Id)
);



CREATE TABLE TipoEntrada (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Tipo VARCHAR(255) NOT NULL,
	PrecioBase INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id)
);
	

CREATE TABLE Entradas (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Usuario_id INT UNSIGNED NOT NULL, /* un usuario puede haber comprado vaarias entradas*/ 
	TipoEntrada_id INT UNSIGNED NOT NULL,
	Promocion_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (Id),
   FOREIGN KEY (Usuario_id) REFERENCES Usuarios(Id),
   FOREIGN KEY (TipoEntrada_id) REFERENCES TipoEntrada(Id),
   FOREIGN KEY (Promocion_id) REFERENCES Promocion(Id)
	
);



/* Por si necesitasemos saberlo */
CREATE TABLE Provincia (
	Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(255),
	CodigoPostal INT UNSIGNED,
	PRIMARY KEY(Id)
);



>>>>>>> f79b9f067d6f94c04c3d31b55db082be48f4ad98:symfonyTickets2.sql
