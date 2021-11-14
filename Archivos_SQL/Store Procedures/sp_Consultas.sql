USE db_bdmm_pwci;
DROP PROCEDURE sp_Consultas;

DELIMITER $$
CREATE PROCEDURE sp_Consultas (
	in opc					VARCHAR(30),
    in id1                  INT,
    in id2                  INT,
    in txt1     			VARCHAR(40),
    in txt2     			VARCHAR(40)
)
BEGIN
	IF opc = 'Login' THEN
        SELECT usuarios.ID_Usuario, usuarios.ID_Rol, usuarios.txt_NomUser FROM usuarios 
            WHERE usuarios.txt_Email = txt1 AND usuarios.txt_Contra = txt2;
    END IF;

    IF opc = 'Perfil' THEN
        SELECT ID, Rol, Usuario, Contrasenia, Nombre_Completo, Email, Genero, Fecha_Nacimiento, Edad, Fecha_Registro, Fecha_Cambio, Foto_Perfil FROM View_Usuarios 
            WHERE ID = id1;
    END IF;

    IF opc = 'Curso' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM View_Curso
            WHERE ID = id1;
    END IF;

    IF opc = 'Comentarios' THEN
        SELECT Comentario, Fecha, Usuario, img, ID_Curso, ID_Usuario FROM View_Comentarios
            WHERE ID_Curso = id1;
    END IF;

    IF opc = 'Videos' THEN
        SELECT Curso, Tema, Capitulo, Titulo, Precio, Video FROM View_VideosCursos
            WHERE Curso = id1;
    END IF;

    IF opc = 'Secciones' THEN
        SELECT ID_Seccion FROM Secciones
            WHERE ID_Curso = id1;
    END IF;

    IF opc = 'All_categorias' THEN
        SELECT ID_Categoria, txt_Nombre FROM Categorias;
    END IF;

    IF opc = 'Accesos_User' THEN
        SELECT ID_Curso, ID_Usuario, ID_Seccion FROM Accesos
            WHERE ID_Curso = id1 and ID_Usuario = id2;
    END IF;

    IF opc = 'All_Registrados' THEN
        SELECT ID_Usuario, ID_Curso, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Activo, Terminado, Fecha_Terminacion, Fecha_Inscripcion, Fecha_Ultima_Entrada FROM View_Registros
            WHERE ID_Usuario = id1;
    END IF;

    IF opc = 'Registrados_User' THEN
        SELECT ID_Usuario, ID_Curso, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Fecha_Cambio FROM View_Registros
            WHERE ID_Usuario = id1 AND ID_Curso = id2;
    END IF;

    IF opc = 'Mas_Nuevo' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM View_Curso
            ORDER BY Registro DESC, ID DESC
            LIMIT 0,3;
    END IF;

    IF opc = 'Mas_Vendidos' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM View_Curso
            ORDER BY Registros_Cantidad DESC, ID DESC
            LIMIT 0,3;
    END IF;

    IF opc = 'Mejor_Calificados' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM View_Curso
            ORDER BY Likes DESC, ID DESC
            LIMIT 0,3;
    END IF;

    IF opc = 'Mensajes' THEN
        SELECT ID, ID_Curso, ID_Usuario, Nombre_Usuario, Mensaje, isFromEscuela, Fecha, Curso, Usuario, ID_Maestro FROM view_mensajes
            WHERE ID_Curso = id1 AND ID_Usuario = id2
            ORDER BY Fecha ASC, ID ASC;
    END IF;

    IF opc = 'Mensajes_Maestro' THEN
        SELECT ID, ID_Curso, ID_Usuario, Nombre_Usuario, Mensaje, isFromEscuela, Fecha, Curso, Usuario, ID_Maestro FROM view_mensajes
            WHERE ID_Maestro = id1
			GROUP BY ID_Usuario, ID_Curso
            ORDER BY Fecha ASC, ID ASC;
    END IF;

    IF opc = 'Cursos_Maestro' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, ID_Profesor, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM view_curso
            WHERE ID_Profesor = id1;
    END IF;

    IF opc = 'Diploma' THEN
        SELECT View_Registros.Nombre_Completo as Alumno, View_Registros.Titulo as Curso, View_Registros.Fecha_Terminacion as Fecha, View_Usuarios.Nombre_Completo as Profesor FROM View_Registros
            inner join View_Usuarios on View_Usuarios.ID = View_Registros.ID_Profesor
                WHERE View_Registros.ID_Usuario = id1 and View_Registros.ID_Curso = id2;
    END IF;

    IF opc = 'Cont_Terminados' THEN
        SELECT COUNT(ID_Usuario) as Cantidad FROM View_Registros
            WHERE Activo = 1 AND Terminado = 1 AND ID_Usuario = id1;
    END IF;

    IF opc = 'Cont_inTerminados' THEN
        SELECT COUNT(ID_Usuario) as Cantidad FROM View_Registros
            WHERE Porcentaje >= 0 AND Porcentaje < 100 AND Activo = 1 AND Terminado = 0 AND ID_Usuario = id1;
    END IF;

    IF opc = 'Ultimo_Curso' THEN
        SELECT ID_Usuario, ID_Curso, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Activo, Terminado, Fecha_Terminacion, Fecha_Inscripcion, Fecha_Ultima_Entrada FROM View_Registros
            WHERE ID_Usuario = id1
            ORDER BY Fecha_Ultima_Entrada DESC
            LIMIT 0,1;
    END IF;
END
$$
DELIMITER ;