USE db_bdmm_pwci;
DROP PROCEDURE sp_Comentarios;

DELIMITER $$
CREATE PROCEDURE sp_Comentarios (
    in opc                  VARCHAR(10),
	in ID_Curso			    INT,
	in ID_Usuario		    INT,
    in txt_Comentario	    VARCHAR(200)
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Comentarios_Cursos
					(Comentarios_Cursos.ID_Usuario, Comentarios_Cursos.ID_Curso, Comentarios_Cursos.txt_Comentario, Comentarios_Cursos.date_FchaEnvio)
				VALUES 
					(ID_Usuario, ID_Curso, txt_Comentario, NOW());
    END IF;
    
END
$$
DELIMITER ;