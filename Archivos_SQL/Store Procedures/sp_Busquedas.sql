USE db_bdmm_pwci;
DROP PROCEDURE sp_Busquedas;

DELIMITER $$
CREATE PROCEDURE sp_Busquedas (
	in opc					VARCHAR(20),
    in txt_Curso            VARCHAR(40),
    in txt_Categoria        VARCHAR(40),
    in txt_NomUser          VARCHAR(40),
    in opcFiltro   			INT,
    in date_ini    			DATE,
    in date_fin             DATE
)
BEGIN
    IF opc = '6' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from View_Curso
                    where 	if(txt_Curso IS NULL, 1, View_Curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, View_Curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso.Activo = 1
                    ORDER BY View_Curso.Registro DESC, View_Curso.ID DESC;
        ELSE
            select * from View_Curso_Categoria
                    where 	if(txt_Curso IS NULL, 1, View_Curso_Categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, View_Curso_Categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso_Categoria.Categoria = txt_Categoria
                    and		View_Curso_Categoria.Activo = 1
                    ORDER BY View_Curso_Categoria.Registro DESC, View_Curso_Categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '1' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from View_Curso
                    where 	if(txt_Curso IS NULL, 1, View_Curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, View_Curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and 	YEAR(NOW()) = YEAR(View_Curso.Registro)
					and 	MONTH(NOW()) = MONTH(View_Curso.Registro)
					and 	DAY(NOW()) = DAY(View_Curso.Registro)
                    and		View_Curso.Activo = 1
                    ORDER BY View_Curso.Registro DESC, View_Curso.ID DESC;
        ELSE
            select * from View_Curso_Categoria
                    where 	if(txt_Curso IS NULL, 1, View_Curso_Categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, View_Curso_Categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso_Categoria.Categoria = txt_Categoria
                    and 	YEAR(NOW()) = YEAR(View_Curso_Categoria.Registro)
					and 	MONTH(NOW()) = MONTH(View_Curso_Categoria.Registro)
					and 	DAY(NOW()) = DAY(View_Curso_Categoria.Registro)
                    and		View_Curso_Categoria.Activo = 1
                    ORDER BY View_Curso_Categoria.Registro DESC, View_Curso_Categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '2' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from View_Curso
                    where 	if(txt_Curso IS NULL, 1, View_Curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, View_Curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and 	YEAR(NOW()) = YEAR(View_Curso.Registro)
					and 	MONTH(NOW()) = MONTH(View_Curso.Registro)
                    and		View_Curso.Activo = 1
                    ORDER BY View_Curso.Registro DESC, View_Curso.ID DESC;
        ELSE
            select * from View_Curso_Categoria
                    where 	if(txt_Curso IS NULL, 1, View_Curso_Categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, View_Curso_Categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso_Categoria.Categoria = txt_Categoria
                    and 	YEAR(NOW()) = YEAR(View_Curso_Categoria.Registro)
					and 	MONTH(NOW()) = MONTH(View_Curso_Categoria.Registro)
                    and		View_Curso_Categoria.Activo = 1
                    ORDER BY View_Curso_Categoria.Registro DESC, View_Curso_Categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '3' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from View_Curso
                    where 	if(txt_Curso IS NULL, 1, View_Curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, View_Curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and 	YEAR(NOW()) = YEAR(View_Curso.Registro)
                    and		View_Curso.Activo = 1
                    ORDER BY View_Curso.Registro DESC, View_Curso.ID DESC;
        ELSE
            select * from View_Curso_Categoria
                    where 	if(txt_Curso IS NULL, 1, View_Curso_Categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, View_Curso_Categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso_Categoria.Categoria = txt_Categoria
                    and 	YEAR(NOW()) = YEAR(View_Curso_Categoria.Registro)
                    and		View_Curso_Categoria.Activo = 1
                    ORDER BY View_Curso_Categoria.Registro DESC, View_Curso_Categoria.ID DESC;
        END IF;
    END IF;

    IF opc = '4' THEN
        IF txt_Categoria = 'Todos' THEN
            select * from View_Curso
                    where 	if(txt_Curso IS NULL, 1, View_Curso.Titulo LIKE CONCAT('%', txt_Curso, '%'))
                    and 	if(txt_NomUser IS NULL, 1, View_Curso.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso.Registro BETWEEN date_ini AND date_fin
                    and		View_Curso.Activo = 1
                    ORDER BY View_Curso.Registro DESC, View_Curso.ID DESC;
        ELSE
            select * from View_Curso_Categoria
                    where 	if(txt_Curso IS NULL, 1, View_Curso_Categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and 	if(txt_NomUser IS NULL, 1, View_Curso_Categoria.Profesor LIKE CONCAT('%', txt_NomUser, '%'))
                    and		View_Curso_Categoria.Categoria = txt_Categoria
                    and		View_Curso_Categoria.Registro BETWEEN date_ini AND date_fin
                    and		View_Curso_Categoria.Activo = 1
                    ORDER BY View_Curso_Categoria.Registro DESC, View_Curso_Categoria.ID DESC;
        END IF;
    END IF;
    
END
$$
DELIMITER ;