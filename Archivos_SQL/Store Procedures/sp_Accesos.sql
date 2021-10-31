USE db_bdmm_pwci;
DROP PROCEDURE sp_Accesos;

DELIMITER $$
CREATE PROCEDURE sp_Accesos (
    in opc                  VARCHAR(10),
	in ID_Usuario		    INT,
	in ID_Curso			    INT,
    in ID_Seccion		    INT
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Accesos
					(Accesos.ID_Usuario, Accesos.ID_Curso, Accesos.ID_Seccion)
				VALUES 
					(ID_Usuario, ID_Curso, ID_Seccion);
    END IF;
    
END
$$
DELIMITER ;