<div class="contenedor-diplomas bloque_contenedor_cursos" id="Registro">
    <div class="cont_cursos">
        <div class="bloque_de_cursos">
            <?php
            foreach($resCursosMaestro as $row) {
                $estado = "";
                if($row['Activo'] == "0") $estado = "(eliminado)";

                ?>
                <div class="curso_cajita">
                    <div class="info_basica_curso">
                        <h1><?php echo $row['Titulo']." ".$estado ?></h1>
                        <h2><?php echo $row['Descripcion'] ?></h2>
                    </div>
                    <div class="btn_edicion">
                        <button class="ds_delete" btn="Editar" curso="<?php echo $row['ID'] ?>">
                            <h1>Editar</h1>
                        </button>
                        <?php 
                            if($row['Activo'] == "0") {
                                ?>
                                    <button class="ds_delete" btn="Re-Activar" curso="<?php echo $row['ID'] ?>">
                                        <h1>Re Activar</h1>
                                    </button>
                                <?php
                            } else {
                                ?>
                                    <button class="ds_delete" btn="Eliminar" curso="<?php echo $row['ID'] ?>">
                                        <h1>Eliminar</h1>
                                    </button>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>