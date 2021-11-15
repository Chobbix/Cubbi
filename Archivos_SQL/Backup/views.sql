
DROP TABLE IF EXISTS `view_curso`;

DROP VIEW IF EXISTS `view_curso`;
CREATE VIEW `view_curso`  AS  select `cursos`.`ID_Curso` AS `ID`,`cursos`.`txt_Titulo` AS `Titulo`,`cursos`.`txt_Descripcion` AS `Descripcion`,`cursos`.`txt_Duracion` AS `Duracion`,`cursos`.`blob_img` AS `Imagen`,`cursos`.`ID_Usuario` AS `ID_Profesor`,`usuarios`.`txt_NomUser` AS `Profesor`,`cursos`.`isAcitvo` AS `Activo`,`cursos`.`isPrecioGeneral` AS `Tipo`,`cursos`.`f_Precio` AS `Precio`,`cursos`.`date_FchaRegistro` AS `Registro`,`cursos`.`date_FchaUltiCambio` AS `Cambio`,count(distinct `cursos_registrados`.`ID_Usuario`) AS `Registros_Cantidad`,`ObtenerCantidadLikes`(`cursos`.`ID_Curso`) AS `Likes` from ((`cursos` join `usuarios` on((`usuarios`.`ID_Usuario` = `cursos`.`ID_Usuario`))) left join `cursos_registrados` on((`cursos_registrados`.`ID_Curso` = `cursos`.`ID_Curso`))) group by `cursos`.`ID_Curso` ;



DROP TABLE IF EXISTS `view_curso_categoria`;

DROP VIEW IF EXISTS `view_curso_categoria`;
CREATE VIEW `view_curso_categoria`  AS  select `cursos`.`ID_Curso` AS `ID`,`cursos`.`txt_Titulo` AS `Titulo`,`cursos`.`txt_Descripcion` AS `Descripcion`,`cursos`.`txt_Duracion` AS `Duracion`,`cursos`.`blob_img` AS `Imagen`,`usuarios`.`txt_NomUser` AS `Profesor`,`cursos`.`isAcitvo` AS `Activo`,`cursos`.`isPrecioGeneral` AS `Tipo`,`cursos`.`f_Precio` AS `Precio`,`categorias_cursos`.`ID_Categoria` AS `ID_Categoria`,`categorias`.`txt_Nombre` AS `Categoria`,`cursos`.`date_FchaRegistro` AS `Registro`,`cursos`.`date_FchaUltiCambio` AS `Cambio`,count(`cursos_registrados`.`ID_Usuario`) AS `Registros_Cantidad`,`ObtenerCantidadLikes`(`cursos`.`ID_Curso`) AS `Likes` from ((((`categorias_cursos` join `cursos` on((`cursos`.`ID_Curso` = `categorias_cursos`.`ID_Curso`))) join `usuarios` on((`usuarios`.`ID_Usuario` = `cursos`.`ID_Usuario`))) join `categorias` on((`categorias`.`ID_Categoria` = `categorias_cursos`.`ID_Categoria`))) left join `cursos_registrados` on((`cursos_registrados`.`ID_Curso` = `categorias_cursos`.`ID_Curso`))) group by `cursos`.`ID_Curso`,`Categoria` ;



DROP TABLE IF EXISTS `view_registros`;

DROP VIEW IF EXISTS `view_registros`;
CREATE VIEW `view_registros`  AS  select `cursos_registrados`.`ID_Usuario` AS `ID_Usuario`,`cursos_registrados`.`ID_Curso` AS `ID_Curso`,`cursos`.`ID_Usuario` AS `ID_Profesor`,concat(`usuarios`.`txt_Nom`,' ',`usuarios`.`txt_ApePat`) AS `Nombre_Completo`,`cursos_registrados`.`int_SeccionActual` AS `Seccion_Actual`,`cursos_registrados`.`int_CapituloActual` AS `Capitulo_Actual`,`cursos`.`blob_img` AS `img`,`cursos`.`txt_Titulo` AS `Titulo`,count(`capitulos`.`ID_Capitulo`) AS `Capitulos`,`Crear_Porcentaje`(`cursos_registrados`.`int_CapituloActual`,`cursos_registrados`.`int_SeccionActual`,`cursos_registrados`.`ID_Curso`,count(`capitulos`.`ID_Capitulo`),`cursos_registrados`.`isTerminado`) AS `Porcentaje`,`capitulos`.`txt_Titulo` AS `Titulo_Capitulo`,`cursos`.`date_FchaUltiCambio` AS `Fecha_Cambio`,`cursos_registrados`.`date_FchaTerm` AS `Fecha_Terminacion`,`cursos_registrados`.`date_FchaRegistro` AS `Fecha_Inscripcion`,`cursos_registrados`.`date_FchaUltimaEntrada` AS `Fecha_Ultima_Entrada`,`cursos`.`isAcitvo` AS `Activo`,`cursos_registrados`.`isTerminado` AS `Terminado`,`PagoTotal`(`cursos_registrados`.`ID_Curso`,`cursos_registrados`.`ID_Usuario`,`cursos`.`isPrecioGeneral`,`cursos_registrados`.`f_MontoPagado`) AS `Pago`,(case when (`cursos_registrados`.`int_TipoPago` = 2) then 'PayPal' when (`cursos_registrados`.`int_TipoPago` = 1) then 'Tarjeta de Credito' end) AS `Tipo_de_Pago` from (((`cursos_registrados` join `cursos` on((`cursos`.`ID_Curso` = `cursos_registrados`.`ID_Curso`))) join `capitulos` on((`capitulos`.`ID_Curso` = `cursos_registrados`.`ID_Curso`))) join `usuarios` on((`usuarios`.`ID_Usuario` = `cursos_registrados`.`ID_Usuario`))) group by `cursos_registrados`.`ID_Curso`,`cursos_registrados`.`ID_Usuario` order by `cursos_registrados`.`date_FchaRegistro` desc ;



DROP TABLE IF EXISTS `view_ventas_cursos`;

DROP VIEW IF EXISTS `view_ventas_cursos`;
CREATE VIEW `view_ventas_cursos`  AS  select `view_curso`.`ID` AS `ID_Curso`,`view_curso`.`Titulo` AS `Titulo`,`view_curso`.`ID_Profesor` AS `ID_Profesor`,count(`view_registros`.`ID_Usuario`) AS `Cantidad_Alumnos`,ifnull((sum(`view_registros`.`Porcentaje`) / count(`view_registros`.`ID_Usuario`)),0) AS `Porcentaje`,ifnull(sum(`view_registros`.`Pago`),0) AS `Pago` from (`view_curso` left join `view_registros` on((`view_registros`.`ID_Curso` = `view_curso`.`ID`))) group by `view_curso`.`ID` ;