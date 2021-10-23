DELIMITER $$

CREATE TRIGGER validar_precio
BEFORE INSERT
ON capitulos FOR EACH ROW
    IF NEW.f_Precio < 0 THEN
        SET NEW.f_Precio = 0;
    END IF;
$$
DELIMITER ;