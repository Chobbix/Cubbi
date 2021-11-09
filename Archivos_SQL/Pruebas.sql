USE db_bdmm_pwci;

DROP DATABASE db_bdmm_pwci;
CREATE DATABASE db_bdmm_pwci;

SELECT * FROM Roles;
SELECT * FROM Categorias;
SELECT * FROM Usuarios;
SELECT * FROM Cursos;
SELECT * FROM Promedios;
SELECT * FROM Niveles;
SELECT * FROM Cursos_Registrados;
SELECT * FROM Diplomas;

INSERT INTO Roles (txt_Nombre) values ('Estudiante');
INSERT INTO Roles (txt_Nombre) values ('Escuela');

SELECT usuarios.ID_Usuario, usuarios.txt_NomUser FROM usuarios WHERE usuarios.txt_Email = 'bre@gmail.com' AND usuarios.txt_Contra = 'Rito';

call sp_Consultas ('Login', 0, 0, 'bre@gmail.com', 'Rito');

SELECT * FROM view_usuarios;

call sp_Usuarios('A', null, 1, 'Curi_23', '123', 'Brenda', 'Hernandez Garcia', 'bre@gmail.com', 'Femenino', '05/10/2021', NOW(), NOW(), null);

INSERT INTO `db_bdmm_pwci`.`Categorias` (`ID_Categoria`, `txt_Nombre`, `txt_Descrpcion`) VALUES ('1', 'Programacion', 'Para la realizacion de buenos programas');

call sp_Cursos('A', null, 2, 1, 5, 'titulo', 'descripcion', '20hrs', true, 250, null, null, true, false);

ALTER TABLE Cursos CHANGE blob_vid ruta_vid VARCHAR(200);

select * from view_comentarios where ID_Curso = 1;

call sp_Consultas('Comentarios', 1, 0, '', '');

INSERT INTO secciones (ID_Seccion, ID_Curso) VALUES (1, 5);
INSERT INTO secciones (ID_Seccion, ID_Curso) VALUES (2, 5);
INSERT INTO secciones (ID_Seccion, ID_Curso) VALUES (3, 5);
INSERT INTO secciones (ID_Seccion, ID_Curso) VALUES (4, 5);

INSERT INTO Capitulos (ID_Capitulo, ID_Seccion, ID_Curso, txt_Titulo, f_Precio, ruta_vid, ruta_docs) 
	VALUES (1, 1, 5, 'Titulo', 25.5, 'ruta de video', 'ruta de documentos');
INSERT INTO Capitulos (ID_Capitulo, ID_Seccion, ID_Curso, txt_Titulo, f_Precio, ruta_vid, ruta_docs) 
	VALUES (2, 1, 5, 'Titulo', 25.5, 'ruta de video', 'ruta de documentos');
INSERT INTO Capitulos (ID_Capitulo, ID_Seccion, ID_Curso, txt_Titulo, f_Precio, ruta_vid, ruta_docs) 
	VALUES (3, 2, 5, 'Titulo', 25.5, 'ruta de video', 'ruta de documentos');
INSERT INTO Capitulos (ID_Capitulo, ID_Seccion, ID_Curso, txt_Titulo, f_Precio, ruta_vid, ruta_docs) 
	VALUES (4, 2, 5, 'Titulo', 25.5, 'ruta de video', 'ruta de documentos');

ALTER TABLE Capitulos CHANGE blob_vid ruta_vid VARCHAR(200);
ALTER TABLE Capitulos CHANGE blob_docs ruta_docs VARCHAR(200);

select * from view_curso;

select MAX(ID_Curso), txt_titulo from cursos;

CALL sp_Capitulos('A', 3, 2, 6, 'Titulo', '-25.5', 'ruta de video', 'ruta de documentos');
drop trigger insertar_seccion;

call sp_Secciones('A', 0, 8);

call sp_Usuarios('img', 3, 0, 'juan231', '', '', '', '', '', null, null, null, null);

ALTER TABLE Categorias DROP COLUMN txt_Descrpcion;

call sp_Categorias('A', 0, 'Manualidades');

ALTER TABLE Cursos CHANGE isPrecioGeneral isPrecioGeneral INT;
call sp_Consultas ('All_categorias', 0, 0, '', '');

call sp_Busquedas('6', '', 'Todos', '', 0, curdate(), curdate());

call sp_Busquedas('4', '', 'Todos', 'curi', 0, '2021-01-17', curdate());

select curdate();

ALTER TABLE Cursos ADD date_FchaRegistro DATE;
ALTER TABLE Cursos ADD date_FchaUltiCambio DATE;

ALTER TABLE Cursos_Registrados ADD f_MontoPagado FLOAT;
ALTER TABLE Cursos_Registrados ADD int_TipoPago INT;
ALTER TABLE Cursos_Registrados ADD date_FchaRegistro DATE;

            select * from View_Curso
                    where 	YEAR(NOW()) = YEAR(View_Curso.Registro)
					and 	MONTH(NOW()) = MONTH(View_Curso.Registro)
					and 	DAY(NOW()) = DAY(View_Curso.Registro)
                    and		View_Curso.Activo = 1
                    ORDER BY View_Curso.Registro DESC, View_Curso.ID DESC;


call sp_Accesos('A', 1, 28, 1);

ALTER TABLE Cursos_Registrados add int_CapituloActual INT DEFAULT 1;
ALTER TABLE Cursos ADD date_FchaRegistro DATE;

drop table accesos

SELECT Cursos.ID_Curso as ID,
            Cursos.txt_Titulo as Titulo,
            Cursos.txt_Descripcion as Descripcion,
            Cursos.txt_Duracion as Duracion,
            Usuarios.blob_img as Imagen,
            Cursos.date_FchaUltiCambio as Cambio
            from Accesos
            inner join Usuarios on Usuarios.ID_Usuario = Accesos.ID_Usuario
            inner join Cursos on Cursos.ID_Curso = Accesos.ID_Curso;
            
select Crear_Porcentaje(2, 2, 28, 3);

call sp_Consultas ('Mensajes_Maestro', 1, 0, '', '');
call sp_Mensajes('A', 0, 34, 2, 'No pues lo que pasa es que', 0, curdate())

