DELIMITER //

CREATE TRIGGER validar_precio
BEFORE INSERT
ON capitulos FOR EACH ROW
    IF NEW.f_Precio < 0 THEN
        SET NEW.f_Precio = 0;
    END IF;
//
DELIMITER ;


DELIMITER //

CREATE TRIGGER validar_rutas_capitulos
BEFORE UPDATE
ON capitulos FOR EACH ROW
BEGIN
    IF NEW.ruta_vid = "" THEN
        SET NEW.ruta_vid = OLD.ruta_vid;
    END IF;
	IF NEW.ruta_docs = "" THEN
        SET NEW.ruta_docs = OLD.ruta_docs;
    END IF;
END
//
DELIMITER ;


DELIMITER //

CREATE TRIGGER validar_rutas_cursos
BEFORE UPDATE
ON cursos FOR EACH ROW
BEGIN
    IF NEW.ruta_vid = "" THEN
        SET NEW.ruta_vid = OLD.ruta_vid;
    END IF;
    IF NEW.blob_img = "" THEN
        SET NEW.blob_img = OLD.blob_img;
    END IF;
END
//
DELIMITER ;


DELIMITER //

CREATE TRIGGER finalizar_curso
AFTER INSERT
ON promedios FOR EACH ROW
BEGIN
    UPDATE cursos_registrados SET cursos_registrados.isTerminado = 1, cursos_registrados.date_FchaTerm = curdate()
		WHERE cursos_registrados.ID_Curso = NEW.ID_Curso AND cursos_registrados.ID_Usuario = NEW.ID_Usuario;
END
//
DELIMITER ;


DELIMITER //

CREATE TRIGGER validar_imagen_usuario
BEFORE UPDATE
ON usuarios FOR EACH ROW
BEGIN
    IF NEW.blob_img = "" THEN
        SET NEW.blob_img = OLD.blob_img;
    END IF;
END
//
DELIMITER ;


drop trigger validar_precio;
drop trigger validar_rutas_capitulos;
drop trigger validar_rutas_cursos;
drop trigger finalizar_curso;
drop trigger validar_imagen_usuario;