USE db_bdmm_pwci;
DROP PROCEDURE sp_Categorias;

DELIMITER $$
CREATE PROCEDURE sp_Categorias (
	in opc					VARCHAR(1),
    in ID_Categoria			INT,
    in txt_Nombre			VARCHAR(30)
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Categorias
					(Categorias.txt_Nombre)
				VALUES 
					(txt_Nombre);
    END IF;
END
$$
DELIMITER ;