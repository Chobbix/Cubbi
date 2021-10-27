USE db_bdmm_pwci;
DROP PROCEDURE sp_Categorias;

DELIMITER $$
CREATE PROCEDURE sp_Categorias (
	in opc					VARCHAR(30),
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

	IF opc = 'cat_cur' THEN
		INSERT INTO Categorias_cursos
					(Categorias_cursos.ID_Categoria, Categorias_cursos.ID_Curso)
				VALUES 
					(ID_Categoria, Max_Cursos());
    END IF;
END
$$
DELIMITER ;