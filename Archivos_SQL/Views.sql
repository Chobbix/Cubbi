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
SELECT Capitulos.ID_Curso as Curso,
            Capitulos.ID_Seccion as Tema,
            Capitulos.ID_Capitulo as Capitulo,
            Capitulos.txt_Titulo as Titulo,
            Capitulos.f_Precio as Precio,
            Capitulos.ruta_vid as Video
            from Capitulos;

CREATE VIEW View_Curso AS
SELECT Cursos.ID_Curso as ID,
            Cursos.txt_Titulo as Titulo,
            Cursos.txt_Descripcion as Descripcion,
            Cursos.txt_Duracion as Duracion,
            Cursos.blob_img as Imagen,
            Usuarios.txt_NomUser as Profesor,
            Cursos.isAcitvo as Activo,
            Cursos.isPrecioGeneral as Tipo,
            Cursos.f_Precio as Precio,
            Cursos.date_FchaRegistro as Registro,
            Cursos.date_FchaUltiCambio as Cambio
            from Cursos
            inner join Usuarios on Usuarios.ID_Usuario = Cursos.ID_Usuario;

CREATE VIEW View_Curso_Categoria AS
SELECT Cursos.ID_Curso as ID,
            Cursos.txt_Titulo as Titulo,
            Cursos.txt_Descripcion as Descripcion,
            Cursos.txt_Duracion as Duracion,
            Cursos.blob_img as Imagen,
            Usuarios.txt_NomUser as Profesor,
            Cursos.isAcitvo as Activo,
            Cursos.isPrecioGeneral as Tipo,
            Cursos.f_Precio as Precio,
            Categorias_cursos.ID_Categoria as ID_Categoria,
            Categorias.txt_Nombre as Categoria,
            Cursos.date_FchaRegistro as Registro,
            Cursos.date_FchaUltiCambio as Cambio
            from Categorias_cursos
            inner join Cursos on Cursos.ID_Curso = Categorias_cursos.ID_Curso
            inner join Categorias on Categorias.ID_Categoria = Categorias_cursos.ID_Categoria
            inner join Usuarios on Usuarios.ID_Usuario = Cursos.ID_Usuario;

CREATE VIEW View_Comentarios AS
SELECT Comentarios_Cursos.txt_Comentario as Comentario,
            Comentarios_Cursos.date_FchaEnvio as Fecha,
            Usuarios.txt_NomUser as Usuario,
            Usuarios.blob_img as img,
            Cursos.ID_Curso as ID_Curso,
            Usuarios.ID_Usuario as ID_Usuario
            from Comentarios_Cursos
        inner join Usuarios on Usuarios.ID_Usuario = Comentarios_Cursos.ID_Usuario
        inner join Cursos on Cursos.ID_Curso = Comentarios_Cursos.ID_Curso
        ORDER BY Fecha DESC;

drop view View_Usuarios;
drop VIEW View_VideosCursos;
drop VIEW View_Curso;
drop VIEW View_Curso_Categoria;
drop VIEW View_Comentarios;