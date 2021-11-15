DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_Accesos`$$
CREATE  PROCEDURE `sp_Accesos` (IN `opc` VARCHAR(10), IN `ID_Usuario` INT, IN `ID_Curso` INT, IN `ID_Seccion` INT)  BEGIN
	IF opc = 'A' THEN
		INSERT INTO accesos
					(accesos.ID_Usuario, accesos.ID_Curso, accesos.ID_Seccion)
				VALUES 
					(ID_Usuario, ID_Curso, ID_Seccion);
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Busquedas`$$
CREATE  PROCEDURE `sp_Busquedas` (IN `opc` VARCHAR(20), IN `txt_Curso` VARCHAR(40), IN `txt_Categoria` VARCHAR(40), IN `txt_NomUser` VARCHAR(40), IN `opcFiltro` INT, IN `date_ini` DATE, IN `date_fin` DATE)  BEGIN
    IF opc = '6' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from view_curso
                    where 	if(txt_Curso IS NULL, 1, view_curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, view_curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso.Activo = 1
                    ORDER BY view_curso.Registro DESC, view_curso.ID DESC;
        ELSE
            select * from view_curso_categoria
                    where 	if(txt_Curso IS NULL, 1, view_curso_categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, view_curso_categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso_categoria.Categoria = txt_Categoria
                    and		view_curso_categoria.Activo = 1
                    ORDER BY view_curso_categoria.Registro DESC, view_curso_categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '1' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from view_curso
                    where 	if(txt_Curso IS NULL, 1, view_curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, view_curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and 	YEAR(NOW()) = YEAR(view_curso.Registro)
					and 	MONTH(NOW()) = MONTH(view_curso.Registro)
					and 	DAY(NOW()) = DAY(view_curso.Registro)
                    and		view_curso.Activo = 1
                    ORDER BY view_curso.Registro DESC, view_curso.ID DESC;
        ELSE
            select * from view_curso_categoria
                    where 	if(txt_Curso IS NULL, 1, view_curso_categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, view_curso_categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso_categoria.Categoria = txt_Categoria
                    and 	YEAR(NOW()) = YEAR(view_curso_categoria.Registro)
					and 	MONTH(NOW()) = MONTH(view_curso_categoria.Registro)
					and 	DAY(NOW()) = DAY(view_curso_categoria.Registro)
                    and		view_curso_categoria.Activo = 1
                    ORDER BY view_curso_categoria.Registro DESC, view_curso_categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '2' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from view_curso
                    where 	if(txt_Curso IS NULL, 1, view_curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, view_curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and 	YEAR(NOW()) = YEAR(view_curso.Registro)
					and 	MONTH(NOW()) = MONTH(view_curso.Registro)
                    and		view_curso.Activo = 1
                    ORDER BY view_curso.Registro DESC, view_curso.ID DESC;
        ELSE
            select * from view_curso_categoria
                    where 	if(txt_Curso IS NULL, 1, view_curso_categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, view_curso_categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso_categoria.Categoria = txt_Categoria
                    and 	YEAR(NOW()) = YEAR(view_curso_categoria.Registro)
					and 	MONTH(NOW()) = MONTH(view_curso_categoria.Registro)
                    and		view_curso_categoria.Activo = 1
                    ORDER BY view_curso_categoria.Registro DESC, view_curso_categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '3' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from view_curso
                    where 	if(txt_Curso IS NULL, 1, view_curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, view_curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and 	YEAR(NOW()) = YEAR(view_curso.Registro)
                    and		view_curso.Activo = 1
                    ORDER BY view_curso.Registro DESC, view_curso.ID DESC;
        ELSE
            select * from view_curso_categoria
                    where 	if(txt_Curso IS NULL, 1, view_curso_categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, view_curso_categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso_categoria.Categoria = txt_Categoria
                    and 	YEAR(NOW()) = YEAR(view_curso_categoria.Registro)
                    and		view_curso_categoria.Activo = 1
                    ORDER BY view_curso_categoria.Registro DESC, view_curso_categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '4' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from view_curso
                    where 	if(txt_Curso IS NULL, 1, view_curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, view_curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso.Registro BETWEEN date_ini AND date_fin
                    and		view_curso.Activo = 1
                    ORDER BY view_curso.Registro DESC, view_curso.ID DESC;
        ELSE
            select * from view_curso_categoria
                    where 	if(txt_Curso IS NULL, 1, view_curso_categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, view_curso_categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		view_curso_categoria.Categoria = txt_Categoria
                    and		view_curso_categoria.Registro BETWEEN date_ini AND date_fin
                    and		view_curso_categoria.Activo = 1
                    ORDER BY view_curso_categoria.Registro DESC, view_curso_categoria.ID DESC;
        END IF;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `sp_Capitulos`$$
CREATE  PROCEDURE `sp_Capitulos` (IN `opc` VARCHAR(1), IN `ID_Capitulo` INT, IN `ID_Seccion` INT, IN `ID_Curso` INT, IN `txt_Titulo` VARCHAR(200), IN `f_Precio` FLOAT, IN `ruta_vid` VARCHAR(200), IN `ruta_docs` VARCHAR(200))  BEGIN
	IF opc = 'A' THEN
		INSERT INTO capitulos (capitulos.ID_Capitulo, capitulos.ID_Seccion, capitulos.ID_Curso, capitulos.txt_Titulo, capitulos.f_Precio, capitulos.ruta_vid, capitulos.ruta_docs) 
            VALUES (ID_Capitulo, ID_Seccion, Max_Cursos(), txt_Titulo, f_Precio, ruta_vid, ruta_docs);
    END IF;
	IF opc = 'C' THEN
		UPDATE capitulos SET capitulos.txt_Titulo = txt_Titulo, 
        capitulos.f_Precio = f_Precio, 
        capitulos.ruta_vid = ruta_vid, 
        capitulos.ruta_docs = ruta_docs
            WHERE   capitulos.ID_Curso = ID_Curso 
            AND     capitulos.ID_Seccion = ID_Seccion
            AND     capitulos.ID_Capitulo = ID_Capitulo;
    END IF;
	IF opc = 'D' THEN
		INSERT INTO capitulos (capitulos.ID_Capitulo, capitulos.ID_Seccion, capitulos.ID_Curso, capitulos.txt_Titulo, capitulos.f_Precio, capitulos.ruta_vid, capitulos.ruta_docs) 
            VALUES (ID_Capitulo, ID_Seccion, ID_Curso, txt_Titulo, f_Precio, ruta_vid, ruta_docs);
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Categorias`$$
CREATE  PROCEDURE `sp_Categorias` (IN `opc` VARCHAR(30), IN `ID_Categoria` INT, IN `txt_Nombre` VARCHAR(30))  BEGIN
	IF opc = 'A' THEN
		INSERT INTO categorias
					(categorias.txt_Nombre)
				VALUES 
					(txt_Nombre);
    END IF;
	IF opc = 'cat_cur' THEN
		INSERT INTO categorias_cursos
					(categorias_cursos.ID_Categoria, categorias_cursos.ID_Curso)
				VALUES 
					(ID_Categoria, Max_Cursos());
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Comentarios`$$
CREATE  PROCEDURE `sp_Comentarios` (IN `opc` VARCHAR(10), IN `ID_Curso` INT, IN `ID_Usuario` INT, IN `txt_Comentario` VARCHAR(200))  BEGIN
	IF opc = 'A' THEN
		INSERT INTO comentarios_cursos
					(comentarios_cursos.ID_Usuario, comentarios_cursos.ID_Curso, comentarios_cursos.txt_Comentario, comentarios_cursos.date_FchaEnvio)
				VALUES 
					(ID_Usuario, ID_Curso, txt_Comentario, NOW());
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Consultas`$$
CREATE  PROCEDURE `sp_Consultas` (IN `opc` VARCHAR(30), IN `id1` INT, IN `id2` INT, IN `txt1` VARCHAR(40), IN `txt2` VARCHAR(40))  BEGIN
	IF opc = 'Login' THEN
        SELECT usuarios.ID_Usuario, usuarios.ID_Rol, usuarios.txt_NomUser FROM usuarios 
            WHERE usuarios.txt_Email = txt1 AND usuarios.txt_Contra = txt2;
    END IF;
    IF opc = 'Perfil' THEN
        SELECT ID, Rol, Usuario, Contrasenia, Nombre_Completo, Email, Genero, Fecha_Nacimiento, Edad, Fecha_Registro, Fecha_Cambio, Foto_Perfil FROM view_usuarios 
            WHERE ID = id1;
    END IF;
    IF opc = 'Curso' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM view_curso
            WHERE ID = id1;
    END IF;
    IF opc = 'Comentarios' THEN
        SELECT Comentario, Fecha, Usuario, img, ID_Curso, ID_Usuario FROM view_comentarios
            WHERE ID_Curso = id1;
    END IF;
    IF opc = 'Videos' THEN
        SELECT Curso, Tema, Capitulo, Titulo, Precio, Video FROM view_videoscursos
            WHERE Curso = id1;
    END IF;
    IF opc = 'Secciones' THEN
        SELECT ID_Seccion FROM Secciones
            WHERE ID_Curso = id1;
    END IF;
    IF opc = 'All_categorias' THEN
        SELECT ID_Categoria, txt_Nombre FROM categorias;
    END IF;
    IF opc = 'Accesos_User' THEN
        SELECT ID_Curso, ID_Usuario, ID_Seccion FROM accesos
            WHERE ID_Curso = id1 and ID_Usuario = id2;
    END IF;
    IF opc = 'All_Registrados' THEN
        SELECT ID_Usuario, ID_Curso, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Activo, Terminado, Fecha_Terminacion, Fecha_Inscripcion, Fecha_Ultima_Entrada FROM view_registros
            WHERE ID_Usuario = id1;
    END IF;
    IF opc = 'Registrados_User' THEN
        SELECT ID_Usuario, ID_Curso, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Fecha_Cambio FROM view_registros
            WHERE ID_Usuario = id1 AND ID_Curso = id2;
    END IF;
    IF opc = 'Mas_Nuevo' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM view_curso
            ORDER BY Registro DESC, ID DESC
            LIMIT 0,3;
    END IF;
    IF opc = 'Mas_Vendidos' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM view_curso
            ORDER BY Registros_Cantidad DESC, ID DESC
            LIMIT 0,3;
    END IF;
    IF opc = 'Mejor_Calificados' THEN
        SELECT ID, Titulo, Descripcion, Duracion, Imagen, Profesor, Activo, Tipo, Precio, Registro, Cambio, Registros_Cantidad, Likes FROM view_curso
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
        SELECT view_registros.Nombre_Completo as Alumno, view_registros.Titulo as Curso, view_registros.Fecha_Terminacion as Fecha, view_usuarios.Nombre_Completo as Profesor FROM view_registros
            inner join view_usuarios on view_usuarios.ID = view_registros.ID_Profesor
                WHERE view_registros.ID_Usuario = id1 and view_registros.ID_Curso = id2;
    END IF;
    IF opc = 'Cont_Terminados' THEN
        SELECT COUNT(ID_Usuario) as Cantidad FROM view_registros
            WHERE Activo = 1 AND Terminado = 1 AND ID_Usuario = id1;
    END IF;
    IF opc = 'Cont_inTerminados' THEN
        SELECT COUNT(ID_Usuario) as Cantidad FROM view_registros
            WHERE Porcentaje >= 0 AND Porcentaje < 100 AND Activo = 1 AND Terminado = 0 AND ID_Usuario = id1;
    END IF;
    IF opc = 'Ultimo_Curso' THEN
        SELECT ID_Usuario, ID_Curso, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Activo, Terminado, Fecha_Terminacion, Fecha_Inscripcion, Fecha_Ultima_Entrada FROM view_registros
            WHERE ID_Usuario = id1
            ORDER BY Fecha_Ultima_Entrada DESC
            LIMIT 0,1;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Cursos`$$
CREATE  PROCEDURE `sp_Cursos` (IN `opc` VARCHAR(10), IN `ID_Curso` INT, IN `ID_Usuario` INT, IN `ID_Categoria` INT, IN `int_Niveles` INT, IN `txt_Titulo` VARCHAR(30), IN `txt_Descripcion` VARCHAR(200), IN `txt_Duracion` VARCHAR(10), IN `isPrecioGeneral` BOOL, IN `f_Precio` FLOAT, IN `blob_img` MEDIUMBLOB, IN `ruta_vid` VARCHAR(200), IN `isAcitvo` BOOL, IN `isEdited` BOOL)  BEGIN
	IF opc = 'A' THEN
		INSERT INTO cursos
					(cursos.ID_Usuario, cursos.ID_Categoria, cursos.int_Niveles, cursos.txt_Titulo, cursos.txt_Descripcion, cursos.txt_Duracion, cursos.isPrecioGeneral, cursos.f_Precio, cursos.blob_img, cursos.ruta_vid, cursos.isAcitvo, cursos.isEdited, cursos.date_FchaRegistro, cursos.date_FchaUltiCambio)
				VALUES 
					(ID_Usuario, ID_Categoria, int_Niveles, txt_Titulo, txt_Descripcion, txt_Duracion, isPrecioGeneral, f_Precio, blob_img, ruta_vid, isAcitvo, isEdited, curdate(), curdate());
    END IF;
    IF opc = 'B' THEN
		UPDATE cursos SET cursos.isAcitvo = 0
            WHERE cursos.ID_Curso = ID_Curso;
    END IF;
    IF opc = 'C' THEN
		UPDATE cursos SET cursos.txt_Titulo = txt_Titulo, 
        cursos.txt_Descripcion = txt_Descripcion, 
        cursos.txt_Duracion = txt_Duracion, 
        cursos.f_Precio = f_Precio, 
        cursos.blob_img = blob_img, 
        cursos.ruta_vid = ruta_vid, 
        cursos.isEdited = 1,
        cursos.date_FchaUltiCambio = curdate()
            WHERE cursos.ID_Curso = ID_Curso;
    END IF;
    IF opc = 'D' THEN
		UPDATE cursos SET cursos.isAcitvo = 1
            WHERE cursos.ID_Curso = ID_Curso;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Cursos_Registros`$$
CREATE  PROCEDURE `sp_Cursos_Registros` (IN `opc` VARCHAR(10), IN `ID_Usuario` INT, IN `ID_Curso` INT, IN `f_MontoPagado` FLOAT, IN `int_TipoPago` INT, IN `ID_Seccion` INT, IN `ID_Capitulo` INT)  BEGIN
	IF opc = 'A' THEN
		INSERT INTO cursos_registrados
					(cursos_registrados.ID_Usuario, cursos_registrados.ID_Curso, cursos_registrados.int_SeccionActual, cursos_registrados.isTerminado, cursos_registrados.isBaja, cursos_registrados.f_MontoPagado, cursos_registrados.int_TipoPago, cursos_registrados.date_FchaRegistro)
				VALUES 
					(ID_Usuario, ID_Curso, 1, 0, 0, f_MontoPagado, int_TipoPago, curdate());
    END IF;
	IF opc = 'C_SecCap' THEN
		UPDATE cursos_registrados SET cursos_registrados.int_SeccionActual = ID_Seccion,
				cursos_registrados.int_CapituloActual = ID_Capitulo,
				cursos_registrados.date_FchaUltimaEntrada = curdate()
			WHERE cursos_registrados.ID_Usuario = ID_Usuario AND cursos_registrados.ID_Curso = ID_Curso;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Likes_Dislikes`$$
CREATE  PROCEDURE `sp_Likes_Dislikes` (IN `opc` VARCHAR(10), IN `ID_Curso` INT, IN `ID_Usuario` INT, IN `bool_like` BOOL, IN `bool_dislike` BOOL)  BEGIN
	IF opc = 'A' THEN
        INSERT INTO promedios 
                (promedios.ID_Curso, promedios.ID_Usuario, promedios.bool_like, promedios.bool_dislike) 
            VALUES 
                (ID_Curso, ID_Usuario, bool_like, bool_dislike);
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Mensajes`$$
CREATE  PROCEDURE `sp_Mensajes` (IN `opc` VARCHAR(20), IN `ID_Mensaje` INT, IN `ID_Curso` INT, IN `ID_Usuario` INT, IN `txt_Mensaje` VARCHAR(500), IN `isFromEscuela` BOOL, IN `date_FchaEnvio` DATE)  BEGIN
	IF opc = 'A' THEN
		INSERT INTO mensajes_cursos (mensajes_cursos.ID_Curso, mensajes_cursos.ID_Usuario, mensajes_cursos.txt_Mensaje, mensajes_cursos.isFromEscuela, mensajes_cursos.date_FchaEnvio) 
            VALUES (ID_Curso, ID_Usuario, txt_Mensaje, isFromEscuela, date_FchaEnvio);
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Reportes`$$
CREATE  PROCEDURE `sp_Reportes` (IN `opc` VARCHAR(30), IN `ID_Usuario` INT, IN `ID_Curso` INT)  BEGIN
	IF opc = 'Ventas_Cursos' THEN
        SELECT view_ventas_cursos.ID_Curso, view_ventas_cursos.Titulo, view_ventas_cursos.ID_Profesor, view_ventas_cursos.Cantidad_Alumnos, view_ventas_cursos.Porcentaje, view_ventas_cursos.Pago FROM view_ventas_cursos
            WHERE ID_Profesor = ID_Usuario;
    END IF;

    IF opc = 'Ventas_Tipo_De_Pago' THEN
        select SUM(Pago) as Pago, Tipo_de_Pago, ID_Profesor from view_registros
            where ID_Profesor = ID_Usuario
            group by Tipo_de_Pago;
    END IF;

    IF opc = 'Ventas_Totales' THEN
        select SUM(Pago) as Pago_Total, ID_Profesor from view_registros
            where ID_Profesor = ID_Usuario;
    END IF;

    IF opc = 'Ventas_Detalladas' THEN
        SELECT view_registros.ID_Usuario, view_registros.ID_Curso, Nombre_Completo, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Fecha_Cambio, Fecha_Terminacion, Fecha_Inscripcion, Fecha_Ultima_Entrada, Activo, Terminado, Pago, Tipo_de_Pago
            FROM view_registros;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Secciones`$$
CREATE  PROCEDURE `sp_Secciones` (IN `opc` VARCHAR(1), IN `ID_Curso` INT, IN `ID_Seccion` INT)  BEGIN
	IF opc = 'A' THEN
		INSERT INTO Secciones (Secciones.ID_Seccion, Secciones.ID_Curso) 
            VALUES (ID_Seccion, Max_Cursos());
    END IF;
    IF opc = 'D' THEN
		INSERT INTO Secciones (Secciones.ID_Seccion, Secciones.ID_Curso) 
            VALUES (ID_Seccion, ID_Curso);
    END IF;
END$$

DROP PROCEDURE IF EXISTS `sp_Usuarios`$$
CREATE  PROCEDURE `sp_Usuarios` (IN `opc` VARCHAR(20), IN `ID_Usuario` INT, IN `ID_Rol` INT, IN `txt_NomUser` VARCHAR(20), IN `txt_Contra` VARCHAR(20), IN `txt_Nom` VARCHAR(30), IN `txt_ApePat` VARCHAR(30), IN `txt_Email` VARCHAR(40), IN `txt_Genero` VARCHAR(20), IN `date_FchaNac` DATE, IN `date_FchaRegistro` DATE, IN `date_FchaUltiCambio` DATE, IN `blob_img` MEDIUMBLOB)  BEGIN
	IF opc = 'A' THEN
		INSERT INTO usuarios
					(usuarios.ID_Rol, usuarios.txt_NomUser, usuarios.txt_Contra, usuarios.txt_Nom, usuarios.txt_ApePat, usuarios.txt_Email, usuarios.txt_Genero, usuarios.date_FchaNac, usuarios.date_FchaRegistro, usuarios.date_FchaUltiCambio)
				VALUES 
					(ID_Rol, txt_NomUser, txt_Contra, txt_Nom, txt_ApePat, txt_Email, txt_Genero, date_FchaNac, date_FchaRegistro, date_FchaUltiCambio);
    END IF;
	IF opc = 'B' THEN
		DELETE FROM usuarios WHERE usuarios.ID_Usuario = ID_Usuario;
    END IF;
    IF opc = 'img' THEN
		UPDATE usuarios SET 
        usuarios.blob_img = blob_img, 
        usuarios.txt_Contra = txt_Contra,
        usuarios.txt_NomUser = txt_NomUser,
        usuarios.date_FchaUltiCambio = curdate()
          WHERE usuarios.ID_Usuario= ID_Usuario;
    END IF;
END$$

--
-- Funciones
--
DROP FUNCTION IF EXISTS `Crear_Porcentaje`$$
CREATE  FUNCTION `Crear_Porcentaje` (`capActual` INT, `secActual` INT, `curso` INT, `capCantidad` INT, `isTerminado` BOOL) RETURNS FLOAT BEGIN
	DECLARE porcentaje FLOAT;
	DECLARE division FLOAT;
    DECLARE capAnteriores INT;
    DECLARE caps INT;
    
    IF isTerminado = true THEN
		SET porcentaje = 100;
    ELSE
        SET secActual = secActual - 1;
		SET capAnteriores = 0;
		
		while secActual > 0 do
		SET caps = (select COUNT(ID_Capitulo) from capitulos where ID_seccion = secActual and ID_Curso = curso);
		SET capAnteriores = capAnteriores + caps;
		SET secActual = secActual - 1;
		end while;
		
		SET capActual = capActual + capAnteriores;
		
		SET division = (capActual - 1) / capCantidad;
		SET porcentaje = division * 100;
    END IF;
    
	RETURN porcentaje;
END$$

DROP FUNCTION IF EXISTS `Max_Cursos`$$
CREATE  FUNCTION `Max_Cursos` () RETURNS INT(11) BEGIN
	DECLARE maximo INT;
	SET maximo = (select MAX(cursos.ID_Curso) from cursos);
	RETURN maximo;
END$$

DROP FUNCTION IF EXISTS `ObtenerCantidadLikes`$$
CREATE  FUNCTION `ObtenerCantidadLikes` (`idCurso` INT) RETURNS INT(11) BEGIN
	DECLARE cantidad INT;
	SET cantidad = (select COUNT(CASE WHEN promedios.bool_like LIKE 1 THEN 1 END) from promedios where promedios.ID_Curso = idCurso);
	RETURN cantidad;
END$$

DROP FUNCTION IF EXISTS `Obtener_Usuario_Mensajes`$$
CREATE  FUNCTION `Obtener_Usuario_Mensajes` (`idCurso` INT, `idUsuario` INT, `isMaestro` BOOLEAN) RETURNS VARCHAR(50) CHARSET latin1 BEGIN
	DECLARE txt_Nombre VARCHAR(50);
    
	IF isMaestro = 0 THEN
		SET txt_Nombre = (SELECT usuarios.txt_NomUser from usuarios where usuarios.ID_Usuario = idUsuario);
    ELSE
		SET txt_Nombre = (SELECT usuarios.txt_NomUser from cursos inner join usuarios on usuarios.ID_Usuario = cursos.ID_Usuario where cursos.ID_Curso = idCurso);
    END IF;
	RETURN txt_Nombre;
END$$

DROP FUNCTION IF EXISTS `PagoTotal`$$
CREATE  FUNCTION `PagoTotal` (`idcurso` INT, `idUsuario` INT, `tipo` INT, `monto` FLOAT) RETURNS FLOAT BEGIN
    IF tipo = 3 THEN
		SET monto = (select SUM(f_Precio) from accesos 
							inner join capitulos on capitulos.ID_Curso = accesos.ID_Curso AND capitulos.ID_Seccion = accesos.ID_Seccion
                                where accesos.ID_Curso = idcurso AND accesos.ID_usuario = idUsuario
								group by accesos.ID_Curso, accesos.ID_usuario);
    END IF;
    
	RETURN monto;
END$$

DELIMITER ;


DROP TABLE IF EXISTS `view_curso`;

DROP VIEW IF EXISTS `view_curso`;
CREATE VIEW `view_curso`  AS  select `cursos`.`ID_Curso` AS `ID`,`cursos`.`txt_Titulo` AS `Titulo`,`cursos`.`txt_Descripcion` AS `Descripcion`,`cursos`.`txt_Duracion` AS `Duracion`,`cursos`.`blob_img` AS `Imagen`,`cursos`.`ID_Usuario` AS `ID_Profesor`,`usuarios`.`txt_NomUser` AS `Profesor`,`cursos`.`isAcitvo` AS `Activo`,`cursos`.`isPrecioGeneral` AS `Tipo`,`cursos`.`f_Precio` AS `Precio`,`cursos`.`date_FchaRegistro` AS `Registro`,`cursos`.`date_FchaUltiCambio` AS `Cambio`,count(distinct `cursos_registrados`.`ID_Usuario`) AS `Registros_Cantidad`,`ObtenerCantidadLikes`(`cursos`.`ID_Curso`) AS `Likes` from ((`cursos` join `usuarios` on((`usuarios`.`ID_Usuario` = `cursos`.`ID_Usuario`))) left join `cursos_registrados` on((`cursos_registrados`.`ID_Curso` = `cursos`.`ID_Curso`))) group by `cursos`.`ID_Curso` ;



DROP TABLE IF EXISTS `view_curso_categoria`;

DROP VIEW IF EXISTS `view_curso_categoria`;
CREATE VIEW `view_curso_categoria`  AS  select `cursos`.`ID_Curso` AS `ID`,`cursos`.`txt_Titulo` AS `Titulo`,`cursos`.`txt_Descripcion` AS `Descripcion`,`cursos`.`txt_Duracion` AS `Duracion`,`cursos`.`blob_img` AS `Imagen`,`usuarios`.`txt_NomUser` AS `Profesor`,`cursos`.`isAcitvo` AS `Activo`,`cursos`.`isPrecioGeneral` AS `Tipo`,`cursos`.`f_Precio` AS `Precio`,`categorias_cursos`.`ID_Categoria` AS `ID_Categoria`,`categorias`.`txt_Nombre` AS `Categoria`,`cursos`.`date_FchaRegistro` AS `Registro`,`cursos`.`date_FchaUltiCambio` AS `Cambio`,count(`cursos_registrados`.`ID_Usuario`) AS `Registros_Cantidad`,`ObtenerCantidadLikes`(`cursos`.`ID_Curso`) AS `Likes` from ((((`categorias_cursos` join `cursos` on((`cursos`.`ID_Curso` = `categorias_cursos`.`ID_Curso`))) join `usuarios` on((`usuarios`.`ID_Usuario` = `cursos`.`ID_Usuario`))) join `categorias` on((`categorias`.`ID_Categoria` = `categorias_cursos`.`ID_Categoria`))) left join `cursos_registrados` on((`cursos_registrados`.`ID_Curso` = `categorias_cursos`.`ID_Curso`))) group by `cursos`.`ID_Curso`,`Categoria` ;



DROP TABLE IF EXISTS `view_registros`;

DROP VIEW IF EXISTS `view_registros`;
CREATE VIEW `view_registros`  AS  select `cursos_registrados`.`ID_Usuario` AS `ID_Usuario`,`cursos_registrados`.`ID_Curso` AS `ID_Curso`,`cursos`.`ID_Usuario` AS `ID_Profesor`,concat(`usuarios`.`txt_Nom`,' ',`usuarios`.`txt_ApePat`) AS `Nombre_Completo`,`cursos_registrados`.`int_SeccionActual` AS `Seccion_Actual`,`cursos_registrados`.`int_CapituloActual` AS `Capitulo_Actual`,`cursos`.`blob_img` AS `img`,`cursos`.`txt_Titulo` AS `Titulo`,count(`capitulos`.`ID_Capitulo`) AS `Capitulos`,`Crear_Porcentaje`(`cursos_registrados`.`int_CapituloActual`,`cursos_registrados`.`int_SeccionActual`,`cursos_registrados`.`ID_Curso`,count(`capitulos`.`ID_Capitulo`),`cursos_registrados`.`isTerminado`) AS `Porcentaje`,`capitulos`.`txt_Titulo` AS `Titulo_Capitulo`,`cursos`.`date_FchaUltiCambio` AS `Fecha_Cambio`,`cursos_registrados`.`date_FchaTerm` AS `Fecha_Terminacion`,`cursos_registrados`.`date_FchaRegistro` AS `Fecha_Inscripcion`,`cursos_registrados`.`date_FchaUltimaEntrada` AS `Fecha_Ultima_Entrada`,`cursos`.`isAcitvo` AS `Activo`,`cursos_registrados`.`isTerminado` AS `Terminado`,`PagoTotal`(`cursos_registrados`.`ID_Curso`,`cursos_registrados`.`ID_Usuario`,`cursos`.`isPrecioGeneral`,`cursos_registrados`.`f_MontoPagado`) AS `Pago`,(case when (`cursos_registrados`.`int_TipoPago` = 2) then 'PayPal' when (`cursos_registrados`.`int_TipoPago` = 1) then 'Tarjeta de Credito' end) AS `Tipo_de_Pago` from (((`cursos_registrados` join `cursos` on((`cursos`.`ID_Curso` = `cursos_registrados`.`ID_Curso`))) join `capitulos` on((`capitulos`.`ID_Curso` = `cursos_registrados`.`ID_Curso`))) join `usuarios` on((`usuarios`.`ID_Usuario` = `cursos_registrados`.`ID_Usuario`))) group by `cursos_registrados`.`ID_Curso`,`cursos_registrados`.`ID_Usuario` order by `cursos_registrados`.`date_FchaRegistro` desc ;



DROP TABLE IF EXISTS `view_ventas_cursos`;

DROP VIEW IF EXISTS `view_ventas_cursos`;
CREATE VIEW `view_ventas_cursos`  AS  select `view_curso`.`ID` AS `ID_Curso`,`view_curso`.`Titulo` AS `Titulo`,`view_curso`.`ID_Profesor` AS `ID_Profesor`,count(`view_registros`.`ID_Usuario`) AS `Cantidad_Alumnos`,ifnull((sum(`view_registros`.`Porcentaje`) / count(`view_registros`.`ID_Usuario`)),0) AS `Porcentaje`,ifnull(sum(`view_registros`.`Pago`),0) AS `Pago` from (`view_curso` left join `view_registros` on((`view_registros`.`ID_Curso` = `view_curso`.`ID`))) group by `view_curso`.`ID` ;