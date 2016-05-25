CREATE TABLE bares(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	ubicacion VARCHAR(255),
	telefono INT,
	horario VARCHAR(255),
	PRIMARY KEY(id)
);
CREATE TABLE cliente (
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200),
	edad INT,
	telefono INT,
	correo VARCHAR(200),
	sexo CHAR,
	PRIMARY KEY(id)
);
CREATE TABLE clienteBar (
	idBar INT,
	idCliente INT,
	FOREIGN KEY(idBar) REFERENCES bares(id),
	FOREIGN KEY(idCliente) REFERENCES cliente(id)
);
CREATE TABLE empleados(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200),
	edad INT,
	telefono INT,
	correo VARCHAR(200),
	idBar INT,
	sexo CHAR,
	PRIMARY KEY(id),
	FOREIGN KEY(idBar) REFERENCES bares(id)
);
CREATE TABLE productos (
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR (200),
	precio INT,
	idBar INT,
	PRIMARY KEY(id),
	FOREIGN KEY(idBar) REFERENCES bares(id)
);
CREATE TABLE promocion (
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	idBar INT,
	descripcion VARCHAR (500),
	PRIMARY KEY(id),
	FOREIGN KEY(idBar) REFERENCES bares(id)
);

INSERT INTO bares(nombre,ubicacion, telefono, horario) VALUES("Rodeo", "Calle1", 5534876,"L-D,9-18");
INSERT INTO bares(nombre,ubicacion, telefono, horario) VALUES("Yadis", "Calle2", 55323477,"L-D,9-18");
INSERT INTO bares(nombre,ubicacion, telefono, horario) VALUES("SalSiPuedes", "Calle3", 55456878,"L-D,9-18");
INSERT INTO bares(nombre,ubicacion, telefono, horario) VALUES("Chabela", "Calle4", 554454879,"L-D,9-18");
INSERT INTO bares(nombre,ubicacion, telefono, horario) VALUES("Chilanguitos", "Calle5", 5567810,"L-D,9-18");

INSERT INTO cliente(nombre,edad, telefono, correo, sexo) VALUES("Kile", "22", 5534876, "kile@yopmail.com","H");
INSERT INTO cliente(nombre,edad, telefono, correo, sexo) VALUES("alejandro", "23", 5534876, "alejandro@yopmail.com","H");
INSERT INTO cliente(nombre,edad, telefono, correo, sexo) VALUES("ricardo", "23", 5534876, "ricardo@yopmail.com","H");
INSERT INTO cliente(nombre,edad, telefono, correo, sexo) VALUES("josua", "27", 5534876, "josua@yopmail.com","H");
INSERT INTO cliente(nombre,edad, telefono, correo, sexo) VALUES("oscar", "21", 5534876, "oscar@yopmail.com","H");
INSERT INTO cliente(nombre,edad, telefono, correo, sexo) VALUES("Gerson", "22", 5534876, "Gerson@yopmail.com","H");

INSERT INTO empleados(nombre,edad, telefono, correo, idBar, sexo) VALUES("Riich", "30", 5534876, "Riich@yopmail.com", 1,"H");
INSERT INTO empleados(nombre,edad, telefono, correo, idBar, sexo) VALUES("Oliver", "40", 5534876, "Oliver@yopmail.com", 2,"H");
INSERT INTO empleados(nombre,edad, telefono, correo, idBar, sexo) VALUES("Piripituchi", "50", 5534876, "Piripituchi@yopmail.com", 3,"H");
INSERT INTO empleados(nombre,edad, telefono, correo, idBar, sexo) VALUES("SharkDj", "30", 5534876, "SharkDj@yopmail.com", 4,"H");
INSERT INTO empleados(nombre,edad, telefono, correo, idBar, sexo) VALUES("Granowidts", "38", 5534876, "Granowidts@yopmail.com", 5,"H");

INSERT INTO productos(nombre, precio, idBar) VALUES("Cerveza", 40, 1);
INSERT INTO productos(nombre, precio, idBar) VALUES("refresco", 20, 1);
INSERT INTO productos(nombre, precio, idBar) VALUES("papas", 10, 1);
INSERT INTO productos(nombre, precio, idBar) VALUES("escachada", 5, 1);
INSERT INTO productos(nombre, precio, idBar) VALUES("tequila", 40, 1);
#1------------rodeo
INSERT INTO productos(nombre, precio, idBar) VALUES("Cerveza", 40, 2);
INSERT INTO productos(nombre, precio, idBar) VALUES("refresco", 20, 2);
INSERT INTO productos(nombre, precio, idBar) VALUES("botana", 10, 2);
INSERT INTO productos(nombre, precio, idBar) VALUES("cubas", 40, 2);
INSERT INTO productos(nombre, precio, idBar) VALUES("cigarros", 5, 2);
#2-----------yadis
INSERT INTO productos(nombre, precio, idBar) VALUES("Cerveza", 40, 3);
INSERT INTO productos(nombre, precio, idBar) VALUES("cubas", 50, 3);
INSERT INTO productos(nombre, precio, idBar) VALUES("botana", 15, 3);
INSERT INTO productos(nombre, precio, idBar) VALUES("refrescos", 15, 3);
INSERT INTO productos(nombre, precio, idBar) VALUES("cigarros", 5, 3);
#3-----------sal si puedes
INSERT INTO productos(nombre, precio, idBar) VALUES("Cerveza", 30, 4);
INSERT INTO productos(nombre, precio, idBar) VALUES("refresco", 20, 4);
INSERT INTO productos(nombre, precio, idBar) VALUES("botana", 10, 4);
INSERT INTO productos(nombre, precio, idBar) VALUES("cigarros", 5, 4);
INSERT INTO productos(nombre, precio, idBar) VALUES("cubas", 50, 4);
#4-----------chabaela
INSERT INTO productos(nombre, precio, idBar) VALUES("Cerveza", 30, 5);
INSERT INTO productos(nombre, precio, idBar) VALUES("refresco", 20, 5);
INSERT INTO productos(nombre, precio, idBar) VALUES("botana", 10, 5);
INSERT INTO productos(nombre, precio, idBar) VALUES("cigarros", 5, 5);
INSERT INTO productos(nombre, precio, idBar) VALUES("cubas", 50, 5);
#5-----------chilanguitos

INSERT INTO promocion(nombre, idBar, descripcion) VALUES("pakTenbriagues", 1, "Para que te pongas muy borracho con latittas ");
INSERT INTO promocion(nombre, idBar, descripcion) VALUES("pakeTeafloje",2, "No pierdas el tiempo!! y estes baile y baile");
INSERT INTO promocion(nombre, idBar, descripcion) VALUES("pakeTedestruyas", 3,"con los poseidon... para que acabes muy mal y amanezcas todo destruido");
INSERT INTO promocion(nombre, idBar, descripcion) VALUES("pakeTeGuste", 4, "dos cervesas para que conbebas con tus amigos");
INSERT INTO promocion(nombre, idBar, descripcion) VALUES("pakeTePierdas",5, "3 cervezas con solo 100 pesistos");

INSERT INTO clienteBar(idBar, idCliente) VALUES(1, 1);
INSERT INTO clienteBar(idBar, idCliente) VALUES(2, 2);
INSERT INTO clienteBar(idBar, idCliente) VALUES(3, 3);
INSERT INTO clienteBar(idBar, idCliente) VALUES(4, 4);
INSERT INTO clienteBar(idBar, idCliente) VALUES(5, 5);