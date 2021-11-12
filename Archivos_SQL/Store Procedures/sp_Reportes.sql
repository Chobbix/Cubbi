USE db_bdmm_pwci;
DROP PROCEDURE sp_Reportes;

DELIMITER $$
CREATE PROCEDURE sp_Reportes (
	in opc					VARCHAR(30),
    in ID_Usuario           INT,
    in ID_Curso             INT
)
BEGIN
	IF opc = 'Ventas_Cursos' THEN
        SELECT ID_Curso, Titulo, ID_Profesor, Cantidad_Alumnos, Porcentaje, Pago FROM view_ventas_cursos
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
        SELECT ID_Usuario, ID_Curso, Nombre_Completo, Seccion_Actual, Capitulo_Actual, img, Titulo, Capitulos, Porcentaje, Titulo_Capitulo, Fecha_Cambio, Fecha_Terminacion, Fecha_Inscripcion, Fecha_Ultima_Entrada, Activo, Terminado, Pago, Tipo_de_Pago
            FROM view_registros;
    END IF;
END
$$
DELIMITER ;