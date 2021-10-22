USE db_bdmm_pwci;
DROP PROCEDURE sp_Usuarios;

DELIMITER $$
CREATE PROCEDURE sp_Usuarios (
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

    END IF;
    
	IF opc = 'B' THEN

    END IF;
END
$$
DELIMITER ;