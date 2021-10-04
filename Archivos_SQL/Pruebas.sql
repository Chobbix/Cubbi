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