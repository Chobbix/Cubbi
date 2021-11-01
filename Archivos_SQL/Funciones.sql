DELIMITER //
CREATE FUNCTION Max_Cursos() 
RETURNS INT
BEGIN
	DECLARE maximo INT;
	SET maximo = (select MAX(Cursos.ID_Curso) from cursos);
	RETURN maximo;
END;
//


DELIMITER //
CREATE FUNCTION Crear_Porcentaje(capActual INT, capCantidad INT) 
RETURNS FLOAT
BEGIN
	DECLARE porcentaje FLOAT;
	DECLARE division FLOAT;
    
	SET division = (capActual - 1) / capCantidad;
	SET porcentaje = division * 100;
	RETURN porcentaje;
END;
//


select Max_Cursos();

drop function Max_Cursos;
drop function Crear_Porcentaje;

SET GLOBAL log_bin_trust_function_creators = 1;


