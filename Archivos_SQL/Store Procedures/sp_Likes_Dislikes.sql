USE db_bdmm_pwci;
DROP PROCEDURE sp_Likes_Dislikes;

DELIMITER $$
CREATE PROCEDURE sp_Likes_Dislikes (
    in opc                  VARCHAR(10),
	in ID_Curso             INT,
    in ID_Usuario           INT,
    in bool_like            BOOL,
    in bool_dislike         BOOL
)
BEGIN
	IF opc = 'A' THEN
        INSERT INTO promedios 
                (promedios.ID_Curso, promedios.ID_Usuario, promedios.bool_like, promedios.bool_dislike) 
            VALUES 
                (ID_Curso, ID_Usuario, bool_like, bool_dislike);
    END IF;
END
$$
DELIMITER ;