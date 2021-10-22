CREATE VIEW View_Usuarios AS
SELECT Usuarios.ID_Usuario as ID,
            Roles.txt_Nombre as Rol,
            Usuarios.txt_NomUser as Usuario,
            Usuarios.txt_Contra as Contrasenia,
            CONCAT(Usuarios.txt_Nom, ' ', Usuarios.txt_ApePat) as Nombre_Completo,
            Usuarios.txt_Email as Email,
            Usuarios.txt_Genero as Genero,
            Usuarios.date_FchaNac as Fecha_Nacimiento,
            TIMESTAMPDIFF(YEAR, Usuarios.date_FchaNac, NOW()) AS Edad,
            Usuarios.date_FchaRegistro as Fecha_Registro,
            Usuarios.date_FchaUltiCambio as Fecha_Cambio,
            Usuarios.blob_img as Foto_Perfil
            from Usuarios
        inner join Roles on Roles.ID_Rol = Usuarios.ID_Rol;

CREATE VIEW View_VideosCursos AS
SELECT Capitulos.ID_Capitulo as ID,
            Secciones.ID_Seccion as ID_Seccion,
            Cursos.txt_Descripcion as Descripcion,
            Capitulos.txt_Titulo as Titulo_Capitulo,
            Capitulos.blob_vid as Video,
            Capitulos.blob_docs as Imagen
            from Capitulos
        inner join Secciones on Secciones.ID_Seccion = Capitulos.ID_Seccion
        inner join Cursos on Cursos.ID_Curso = Capitulos.ID_Curso;

CREATE VIEW View_Curso AS
SELECT Cursos.ID_Curso as ID,
            Cursos.txt_Titulo as Titulo,
            Cursos.txt_Descripcion as Descripcion,
            Cursos.txt_Duracion as Duracion,
            Cursos.blob_img as Imagen
            from Cursos;

CREATE VIEW View_Comentarios AS
SELECT Comentarios_Cursos.txt_Comentario as Comentario,
            Comentarios_Cursos.date_FchaEnvio as Fecha,
            Usuarios.txt_NomUser as Usuario,
            Usuarios.blob_img as img,
            Cursos.ID_Curso as ID_Curso,
            Usuarios.ID_Usuario as ID_Usuario
            from Comentarios_Cursos
        inner join Usuarios on Usuarios.ID_Usuario = Comentarios_Cursos.ID_Usuario
        inner join Cursos on Cursos.ID_Curso = Comentarios_Cursos.ID_Curso;

drop view View_Usuarios;
drop VIEW View_VideosCursos;
drop VIEW View_Curso;
drop VIEW View_Comentarios;