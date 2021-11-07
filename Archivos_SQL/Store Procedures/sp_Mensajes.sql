USE db_bdmm_pwci;
DROP PROCEDURE sp_Mensajes;

DELIMITER $$
CREATE PROCEDURE sp_Mensajes (
	in ID_Mensaje		    INT,
    in ID_Curso             INT,
    in ID_Usuario           INT,
    in txt_Mensaje          VARCHAR(500),
    in isFromEscuela        BOOL,
    in date_FchaEnvio       DATE
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Mensajes_Cursos (Mensajes_Cursos.ID_Curso, Mensajes_Cursos.ID_Usuario, Mensajes_Cursos.txt_Mensaje, Mensajes_Cursos.isFromEscuela, Mensajes_Cursos.date_FchaEnvio) 
            VALUES (ID_Curso, ID_Usuario, txt_Mensaje, isFromEscuela, date_FchaEnvio);
    END IF;
END
$$
DELIMITER ;