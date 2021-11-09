<div class="contenedor-cursos bloque_contenedor_cursos">
    <div class="cabecera">
        <input type="radio" id="Info" name="a" value="Info" checked>
        <input type="radio" id="contenido" name="a" value="contenido">
        <div class="hi">
            <div div class="bontones_seleccion">
                <label for="Info">
                    <h1 class="text_decoration">informacion general</h1>
                </label>
            </div>
            <div class="bontones_seleccion">
                <label for="contenido">
                    <h1 class="text_decoration">Contenido curso</h1>
                </label>
            </div>
            <button class="save_btn" btnGuardar="Editar">
                <h3> Guardar cambios </h3>
            </button>
        </div>
        <hr>
        <div class="contenido_caja" id="filtrado">

            <?php
            foreach($resCursoModificar as $row) {
                $txtTipoPago;
                if($row['Tipo'] == "1") $txtTipoPago = "Gratis";
                if($row['Tipo'] == "2") $txtTipoPago = "Curso completo";
                if($row['Tipo'] == "3") $txtTipoPago = "Pago por nivel";
            ?>
                <div class="contenedor-Info">
                    <div class="caja">
                        <div class="subcaja">

                            <h1>Titulo</h1>
                            <input name="Titulo" ID_Curso="<?php echo $_GET['curso']; ?>" value="<?php echo $row['Titulo']; ?>" id="Titulo" type="text" placeholder="Ingresa titulo" class="text_input">
                            <h1>Descripcion</h1>
                            <input name="Descripcion" value="<?php echo $row['Descripcion']; ?>" id="Descripcion" type="text" placeholder="Ingresa descripcion" class="text_input">
                            <h1>Duracion</h1>
                            <input id="Duracion" value="<?php echo $row['Duracion']; ?>" type="text" placeholder="tiempo estimado" class="text_input">
                            <h1 id="Costoh1">Costo:</h1>
                            <input id="Costo" value="<?php echo $row['Precio']; ?>" type="text" placeholder="Asigna un precio" class="text_input">
                            <h1>Tipo de pago:</h1>
                            <select name="Tipodepago" id="tipodepago" class="text_input">
                                <option value="<?php echo $row['Tipo']; ?>"><?php echo $txtTipoPago ?></option>
                            </select>

                        </div>
                        <div class="subcaja">
                            <div class="caja_imagen">
                                <h1>Imagen del curso </h1>
                                <div class="img_box">
                                    <div class="btn_img">
                                        <h1> Subir img</h1>
                                        <input type="file" id="id_imgCurso" name="imagensubida" accept="image/png, .jpeg, .jpg" class="btn_enviar">
                                    </div>
                                </div>
                            </div>
                            <div class="caja_imagen">
                                <h1>Video presentacion</h1>
                                <div class="img_box">
                                    <div class="btn_img">
                                        <h1> Subir video</h1>
                                        <input type="file" id="id_vidCurso" name="imagensubida" accept="video/*"" class=" btn_enviar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="contenedor-contenido">
                <div class="caja">
                    <div class="subcaja caja_cap">
                        <?php
                        $contadorSecciones = 0;
                        foreach($resSecciones as $row) {
                        ?>
                            <div class="bloque_nivel" isViejo="true">
                                <h1>Tema <?php echo $row['ID_Seccion']; ?></h1>
                                <div class="cabecera_nivel" >
                                    <?php
                                    $contadorCapitulos = 0;
                                    foreach($resCapitulos as $row2) {
                                        if($row2['Tema'] == $row['ID_Seccion']){
                                        ?>
                                            <div class="capitulos" isViejo="true">
                                                <h1>Capitulo <?php echo $row2['Capitulo']; ?></h1>
                                                <div class="contenido">
                                                    <div class="nombre_del_subcapitulo">
                                                        <h2>Titulo</h2>
                                                        <input type="text" value="<?php echo $row2['Titulo'] ?>" placeholder=" Titulo del nivel">
                                                    </div>
                                                    <div class="btn_contenidos">
                                                        <div class="btn_video1">
                                                            <h1> Subir video</h1>
                                                            <input type="file" name="imagensubida" accept="video/*"" class=" btn_enviar">
                                                        </div>
                                                        <div class="btn_video">
                                                            <h1> Subir documentos</h1>
                                                            <input type="file" name="imagensubida" accept="" class="btn_enviar">
                                                        </div>
                                                        <div class="costo" id="boxcosto">
                                                            <h1>Costo:</h1>
                                                            <input type="text" value="<?php echo number_format($row2['Precio'], 2); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        $contadorCapitulos++;
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="btd_addchap">
                                    <button class="plus btn_cap" NumeroSec="<?php echo $contadorSecciones + 1 ?>" NumeroCap="<?php echo $contadorCapitulos ?>">
                                        <i class="fas fa-plus-circle"></i>
                                        <h5>Agregar otro capitulo</h5>
                                    </button>
                                </div>
                            </div>
                        <?php
                        $contadorSecciones++;
                        }
                        ?>
                    </div>
                </div>
                <div class="btn_addsec" NumeroSec="<?php echo $contadorSecciones ?>">
                    <button class="plus"><i class="fas fa-plus-circle"></i></button>
                    <h5>Agregar otra seccion</h5>
                </div>
            </div>
        </div>
    </div>
</div>