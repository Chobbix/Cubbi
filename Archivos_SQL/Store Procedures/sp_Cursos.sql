USE db_bdmm_pwci;
DROP PROCEDURE sp_Cursos;

DELIMITER $$
CREATE PROCEDURE sp_Cursos (
    in opc                  VARCHAR(10),
	in ID_Curso			    INT,
	in ID_Usuario		    INT,
    in ID_Categoria		    INT,
    in int_Niveles		    INT,
    in txt_Titulo  		    VARCHAR(30),
    in txt_Descripcion	    VARCHAR(200),
    in txt_Duracion         VARCHAR(10),
    in isPrecioGeneral	    BOOL,
    in f_Precio			    FLOAT,
	in blob_img			    MEDIUMBLOB,
    in ruta_vid      	    VARCHAR(200),
    in isAcitvo			    BOOL,
    in isEdited             BOOL
)
BEGIN
	IF opc = 'A' THEN
		INSERT INTO Cursos
					(Cursos.ID_Usuario, Cursos.ID_Categoria, Cursos.int_Niveles, Cursos.txt_Titulo, Cursos.txt_Descripcion, Cursos.txt_Duracion, Cursos.isPrecioGeneral, Cursos.f_Precio, Cursos.blob_img, Cursos.ruta_vid, Cursos.isAcitvo, Cursos.isEdited, Cursos.date_FchaRegistro, Cursos.date_FchaUltiCambio)
				VALUES 
					(ID_Usuario, ID_Categoria, int_Niveles, txt_Titulo, txt_Descripcion, txt_Duracion, isPrecioGeneral, f_Precio, blob_img, ruta_vid, isAcitvo, isEdited, curdate(), curdate());
    END IF;
    
END
$$
DELIMITER ;