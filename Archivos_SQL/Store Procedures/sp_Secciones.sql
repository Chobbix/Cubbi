USE db_bdmm_pwci;
DROP PROCEDURE sp_Secciones;

DELIMITER $$
CREATE PROCEDURE sp_Secciones (
    in opc				VARCHAR(1),
	in ID_Curso         INT,
    in ID_Seccion		INT
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Secciones (Capitulos.ID_Seccion, Capitulos.ID_Curso) 
            VALUES (ID_Seccion, Max_Cursos());
    END IF;
END
$$
DELIMITER ;