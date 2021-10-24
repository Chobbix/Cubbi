DELIMITER //
CREATE FUNCTION Max_Cursos() 
RETURNS INT
BEGIN
	DECLARE maximo INT;
	SET maximo = (select MAX(Cursos.ID_Curso) from cursos);
	RETURN maximo;
END;
//


select Max_Cursos();

drop function Max_Cursos;


SET GLOBAL log_bin_trust_function_creators = 1;


