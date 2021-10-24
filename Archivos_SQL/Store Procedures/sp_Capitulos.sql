USE db_bdmm_pwci;
DROP PROCEDURE sp_Capitulos;

DELIMITER $$
CREATE PROCEDURE sp_Capitulos (
    in opc				VARCHAR(1),
	in ID_Capitulo      INT,
    in ID_Seccion		INT,
    in ID_Curso			INT,
    in txt_Titulo  		VARCHAR(200),
    in f_Precio			FLOAT,
    in ruta_vid			VARCHAR(200),
    in ruta_docs		VARCHAR(200)
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Capitulos (Capitulos.ID_Capitulo, Capitulos.ID_Seccion, Capitulos.ID_Curso, Capitulos.txt_Titulo, Capitulos.f_Precio, Capitulos.ruta_vid, Capitulos.ruta_docs) 
            VALUES (ID_Capitulo, ID_Seccion, Max_Cursos(), txt_Titulo, f_Precio, ruta_vid, ruta_docs);
    END IF;
END
$$
DELIMITER ;