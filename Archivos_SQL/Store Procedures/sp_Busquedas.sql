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
		select * from View_Curso
				where 	if(txt_Curso IS NULL, 1, View_Curso.Titulo LIKE CONCAT('%', txt_Curso, '%')) 
                and		if(Categoria='Random', 1, View_Preguntas.Categoria = Categoria)
                and		View_Preguntas.Utiles > uti
                and		View_Preguntas.Favoritos > fav
                and		View_Preguntas.Eliminado = 0
				ORDER BY View_Preguntas.FReg DESC limit pag, 10;
    END IF;
    
END
$$
DELIMITER ;