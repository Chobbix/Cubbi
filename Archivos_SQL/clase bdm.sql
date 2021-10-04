UPDATE Deptos SET 
    Deptos.NombreDepto = CONCAT(Deptos.NombreDepto, '-', Deptos.idDepto), 
    Deptos.FechaCreacion = DATE_ADD(Deptos.FechaCreacion, interval 10 week),
WHERE idDepto = 8;