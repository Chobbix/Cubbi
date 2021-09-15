CREATE VIEW View_Usuarios AS
SELECT Usuarios.ID_Usuario as ID,
            Roles.txt_Nombre as Rol,
            Usuarios.txt_NomUser as Usuario,
            Usuarios.txt_Contra as Contrasenia,
            CONCAT(Usuarios.txt_Nom, ' ', Usuarios.txt_ApePat) as Nombre_Completo,
            Usuarios.txt_Email as Email,
            Usuarios.txt_Genero as Genero,
            Usuarios.date_FchaNac as Fecha_Nacimiento,
            TIMESTAMPDIFF(YEAR, Usuarios.date_FchaNac, NOW()) AS Edad,
            Usuarios.date_FchaRegistro as Fecha_Registro,
            Usuarios.date_FchaUltiCambio as Fecha_Cambio,
            Usuarios.blob_img as Foto_Perfil
            from Usuarios
        inner join Roles on Roles.ID_Rol = Usuarios.ID_Rol;

drop view View_Usuarios;