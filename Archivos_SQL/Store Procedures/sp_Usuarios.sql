USE db_bdmm_pwci;
DROP PROCEDURE sp_Usuarios;

DELIMITER $$
CREATE PROCEDURE sp_Usuarios (
	in opc					VARCHAR(20),
    in ID_Usuario			INT,
    in ID_Rol				INT,
    in txt_NomUser			VARCHAR(20),
    in txt_Contra			VARCHAR(20),
    in txt_Nom				VARCHAR(30),
    in txt_ApePat			VARCHAR(30),
    in txt_Email			VARCHAR(40),
    in txt_Genero           VARCHAR(20),
    in date_FchaNac         DATE,
    in date_FchaRegistro	DATE,
    in date_FchaUltiCambio	DATE,
    in blob_img			    MEDIUMBLOB
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Usuarios
					(Usuarios.ID_Rol, Usuarios.txt_NomUser, Usuarios.txt_Contra, Usuarios.txt_Nom, Usuarios.txt_ApePat, Usuarios.txt_Email, Usuarios.txt_Genero, Usuarios.date_FchaNac, Usuarios.date_FchaRegistro, Usuarios.date_FchaUltiCambio)
				VALUES 
					(ID_Rol, txt_NomUser, txt_Contra, txt_Nom, txt_ApePat, txt_Email, txt_Genero, date_FchaNac, date_FchaRegistro, date_FchaUltiCambio);
    END IF;
    
	IF opc = 'B' THEN
		DELETE FROM Usuarios WHERE Usuarios.ID_Usuario = ID_Usuario;
    END IF;

    IF opc = 'img' THEN
		UPDATE Usuarios SET Usuarios.blob_img= blob_img WHERE Usuarios.ID_Usuario= ID_Usuario;
    END IF;
END
$$
DELIMITER ;