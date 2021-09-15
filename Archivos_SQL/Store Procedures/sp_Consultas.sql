USE db_bdmm_pwci;
DROP PROCEDURE sp_Consultas;

DELIMITER $$
CREATE PROCEDURE sp_Consultas (
	in opc					VARCHAR(20),
    in id1                  INT,
    in id2                  INT,
    in txt1     			VARCHAR(40),
    in txt2     			VARCHAR(40)
)
BEGIN
	IF opc = 'Login' THEN
        SELECT usuarios.ID_Usuario, usuarios.txt_NomUser FROM usuarios 
            WHERE usuarios.txt_Email = txt1 AND usuarios.txt_Contra = txt2;
    END IF;

    IF opc = 'Perfil' THEN
        SELECT ID, Rol, Usuario, Contrasenia, Nombre_Completo, Email, Genero, Fecha_Nacimiento, Edad, Fecha_Registro, Fecha_Cambio, Foto_Perfil FROM View_Usuarios 
            WHERE ID = id1;
    END IF;
END
$$
DELIMITER ;