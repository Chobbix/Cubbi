DROP TABLE IF EXISTS `view_usuarios`;

DROP VIEW IF EXISTS `view_usuarios`;
CREATE VIEW `view_usuarios`  AS  select `usuarios`.`ID_Usuario` AS `ID`,`roles`.`txt_Nombre` AS `Rol`,`roles`.`ID_Rol` AS `ID_Rol`, `usuarios`.`txt_NomUser` AS `Usuario`,`usuarios`.`txt_Contra` AS `Contrasenia`,concat(`usuarios`.`txt_Nom`,' ',`usuarios`.`txt_ApePat`) AS `Nombre_Completo`,`usuarios`.`txt_Email` AS `Email`,`usuarios`.`txt_Genero` AS `Genero`,`usuarios`.`date_FchaNac` AS `Fecha_Nacimiento`,timestampdiff(YEAR,`usuarios`.`date_FchaNac`,now()) AS `Edad`,`usuarios`.`date_FchaRegistro` AS `Fecha_Registro`,`usuarios`.`date_FchaUltiCambio` AS `Fecha_Cambio`,`usuarios`.`blob_img` AS `Foto_Perfil` from (`usuarios` join `roles` on((`roles`.`ID_Rol` = `usuarios`.`ID_Rol`))) ;
