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
                    ORDER BY View_Curso.ID;
        ELSE
            select * from View_Curso_Categoria
                    where 	if(txt_Curso IS NULL, 1, View_Curso_Categoria.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                    and		View_Curso_Categoria.Categoria = txt_Categoria
                    ORDER BY View_Curso_Categoria.ID;
        END IF;
    END IF;
    
END
$$
DELIMITER ;