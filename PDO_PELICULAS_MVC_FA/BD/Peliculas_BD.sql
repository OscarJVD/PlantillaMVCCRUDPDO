
DROP DATABASE solupelis;

CREATE DATABASE solupelis;
USE solupelis;

-- MUCHOS A MUCHOS ENTRE CATEGORIA Y ESTADO
CREATE TABLE Estado(
id_estado_PK               int not null auto_increment,
nombre_estado              varchar(25),
primary key (id_estado_PK)
);

CREATE TABLE Usuario(
id_usuario_PK              int not null auto_increment,
id_estado_FK               int not null,
nombre_usuario             varchar(100),
correo                     varchar(130),
clave                      varchar(250),
primary key (id_usuario_PK),
foreign key (id_estado_FK)   references    Estado     (id_estado_PK)
);

CREATE TABLE Categoria_Pelicula(
id_categoria_pelicula_PK   int not null auto_increment,
nombre_categoria           varchar(110) not null,
primary key (id_categoria_pelicula_PK)
);

-- MUCHOS A MUCHOS ENTRE PELICULA Y CATEGORIA-- YA NO
CREATE TABLE Pelicula(
id_pelicula_PK             int not null auto_increment,
id_estado_FK               int not null,
id_usuario_FK              int not null,
id_categoria_pelicula_FK   int not null,
nombre_pelicula            varchar(220) not null,
descripcion                varchar(220) not null,
primary key (id_pelicula_PK),
foreign key (id_estado_FK)   references    Estado     (id_estado_PK),
foreign key (id_usuario_FK)   references    Usuario     (id_usuario_PK),
foreign key (id_categoria_pelicula_FK)   references    Categoria_Pelicula     (id_categoria_pelicula_PK)
);




/*INSERCION DE DATOS*/
INSERT INTO Estado VALUES(null,'activo'),
                         (null,'inactivo');
				
                
INSERT INTO Usuario VALUES(null,'1','Óscar Vargas','oscarjaviervargas@hotmail.com','contra'),
(null,'2','Óscar Vargas','oscarjaervargas@hotmail.com','consdjtra'),
(null,'1','Javier Vargas','aviervrgas@hotmail.com','contasdraa'),
(null,'2','Arturo Vargas','oscarvaas@hotmail.com','contrsa'),
(null,'1','Óscar Vargas','oscarjaver@hotmail.com','contzssra'),
(null,'2','Óscar Vargas','oscarjavieras@hotmail.com','contsGara'),
(null,'1','Alexander Vargas','oscarervargas@hotmail.com','coFGHsaantra'),
(null,'2','Óscar Vargas','oscarjrvargas@hotmail.com','conFtjkra'),
(null,'1','Elon Vargas','oscviervargas@hotmail.com','contfjra'),
(null,'2','Mark Vargas','osciervargas@hotmail.com','confgfdgtra');


INSERT INTO Categoria_Pelicula VALUES(null,'Accion'),
(null,'Aventura'),
(null,'Accion mala'),
(null,'Suspenso'),
(null,'Terror'),
(null,'Infantil'),
(null,'Para adultos'),
(null,'Accion moderna'),
(null,'Ficción'),
(null,'Fantasticas');


INSERT INTO Pelicula VALUES(null,'1','2','5','Los vengadores','pelean contra el mal y ganan'),
(null,'1','2','4','Los gadores','pelan contra el mal'),
(null,'2','5','8','Los vendores','pelean'),
(null,'1','2','3','Los vedores','pelan contra el mal y ganan'),
(null,'2','4','2','Los veadores','pelan contra el mal y ganan'),
(null,'1','1','1','Los vdores','pelan contra el mal y ganan'),
(null,'2','2','2','Los venga','pelan contra el mal y ganan'),
(null,'1','2','4','Los dores','pelan contra el mal y ganan'),
(null,'2','3','5','Los vegadores','pelan y ganan'),
(null,'1','6','6','Los vadores','pelan');



/*
INSERT INTO Categoria_Pelicula VALUES(null,'8','8'),
(null,'1','1'),
(null,'2','2'),
(null,'3','3'),
(null,'4','4'),
(null,'5','5'),
(null,'6','6'),
(null,'7','7');*/


-- VISTAS
-- VISTA MOSTRAR USUARIO CON SU ESTADO
CREATE VIEW mostrarUsuario AS SELECT usu.id_usuario_PK,
									 usu.nombre_usuario,
                                     usu.correo,
									 usu.clave,
                                     est.id_estado_PK,
                                     est.nombre_estado
FROM Usuario usu 
inner join Estado est on usu.id_estado_FK = est.id_estado_PK;



-- VISTA MOSTRAR USUARIO CON SU ESTADO
CREATE VIEW mostrarPelicula AS SELECT peli.id_pelicula_PK,
                                      peli.nombre_pelicula,
									  peli.descripcion,
                                      usu.id_usuario_PK,
									  usu.nombre_usuario,
                                      est.id_estado_PK,
                                      est.nombre_estado,
                                      cat.id_categoria_pelicula_PK,
                                      cat.nombre_categoria 
FROM Pelicula peli 
INNER JOIN Usuario usu ON peli.id_usuario_FK = usu.id_usuario_PK
INNER JOIN Estado est ON peli.id_estado_FK = est.id_estado_PK
INNER JOIN Categoria_Pelicula cat ON peli.id_categoria_pelicula_FK = cat.id_categoria_pelicula_PK;


