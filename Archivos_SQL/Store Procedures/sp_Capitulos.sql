USE db_bdmm_pwci;
DROP PROCEDURE sp_Capitulos;

DELIMITER $$
CREATE PROCEDURE sp_Capitulos (
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
		INSERT INTO Capitulos (Capitulos.ID_Capitulo, Capitulos.ID_Seccion, Capitulos.ID_Curso, Capitulos.txt_Titulo, Capitulos.f_Precio, Capitulos.ruta_vid, Capitulos.ruta_docs) 
            VALUES (ID_Capitulo, ID_Seccion, Max_Cursos(), txt_Titulo, f_Precio, ruta_vid, ruta_docs);
    END IF;

	IF opc = 'C' THEN
		UPDATE Capitulos SET Capitulos.txt_Titulo = txt_Titulo, 
        Capitulos.f_Precio = f_Precio, 
        Capitulos.ruta_vid = ruta_vid, 
        Capitulos.ruta_docs = ruta_docs
            WHERE   Capitulos.ID_Curso = ID_Curso 
            AND     Capitulos.ID_Seccion = ID_Seccion
            AND     Capitulos.ID_Capitulo = ID_Capitulo;
    END IF;

	IF opc = 'D' THEN
		INSERT INTO Capitulos (Capitulos.ID_Capitulo, Capitulos.ID_Seccion, Capitulos.ID_Curso, Capitulos.txt_Titulo, Capitulos.f_Precio, Capitulos.ruta_vid, Capitulos.ruta_docs) 
            VALUES (ID_Capitulo, ID_Seccion, ID_Curso, txt_Titulo, f_Precio, ruta_vid, ruta_docs);
    END IF;
END
$$
DELIMITER ;