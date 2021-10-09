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

