
    <div class="bloque_mss">
        <div class="contenedor_mensajes">
            <div class="cabecera_ms">
                <div class="contenido_cabecera">
                    <?php
                        if(!isset($_GET['Maestro'])) { 
                            ?>
                            <h1><?php echo $row['Titulo']; ?></h1>
                            <?php
                        } else{
                            ?>
                            <h1><?php echo $row['Curso']; ?></h1>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <strcoll-container>
                <div class="cont_mss">
                    <?php
                        $idUsuario;
                        $idCurso;
                        $isFormEscuela;
                        if(!isset($_GET['Maestro'])) {
                            $resMensajes = $mensajes->query_select_mensajes_By_Usuario($_SESSION['ses_usuario'], $row['ID']);
                            $idUsuario = $_SESSION['ses_usuario'];
                            $idCurso = $row['ID'];
                            $isFormEscuela = 0;
                        } else{
                            $resMensajes = $mensajes->query_select_mensajes_By_Usuario($row['ID_Usuario'], $row['ID_Curso']);
                            $idUsuario = $row['ID_Usuario'];
                            $idCurso = $row['ID_Curso'];
                            $isFormEscuela = 1;
                        }
                        foreach($resMensajes as $row) {
                            if($row['isFromEscuela'] == '0'){
                                ?>
                                <div class="mensaje_maestro">
                                    <div class="mss_us">
                                        <h2><?php echo $row['Usuario']; ?></h2>
                                        <h3><?php echo $row['Mensaje']; ?></h3>
                                    </div>
                                </div>
                                <?php
                            }
                            else {
                                ?>
                                <div class="mensaje_us">
                                    <div class="mss_us">
                                        <h2><?php echo $row['Usuario']; ?></h2>
                                        <h3><?php echo $row['Mensaje']; ?></h3>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </strcoll-container>

        </div>
        <div class="send_mss">
            <div class="ds_mss">
                <textarea name="comment" id="comentario" cols="10" rows="5" class="comment_add"></textarea>
                <button class="enviar" usuario="<?php echo $idUsuario ?>" curso="<?php echo $idCurso ?>" isFormEscuela="<?php echo $isFormEscuela ?>"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>