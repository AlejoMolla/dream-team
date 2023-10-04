CREATE TABLE "Productos" (
	"id"	INTEGER,
	"nombre"	TEXT,
	"precio"	REAL,
	"cantidad"	INTEGER,
	"descripcion"	TEXT,
	"categoria_id"	INTEGER,
	FOREIGN KEY("categoria_id") REFERENCES "Categorias"("id"),
	PRIMARY KEY("id" AUTOINCREMENT)
);

CREATE TABLE "Categorias" (
	"id"	INTEGER,
	"Nombre"	TEXT,
	"Especial"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
);

CREATE TABLE "Clientes" (
	"id"	INTEGER,
	"Nombre"	TEXT,
	"Apellido"	TEXT,
	"Correo"	TEXT,
	"Contraseña"	TEXT,
	"genero"	TEXT,
	"telefono"	TEXT,
	"fecha_de_nacimiento"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
);