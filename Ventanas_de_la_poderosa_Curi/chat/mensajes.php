
    <div class="bloque_mss">
        <div class="contenedor_mensajes">
            <div class="cabecera_ms">
                <div class="contenido_cabecera">
                    <h1><?php echo $row['Curso']; ?></h1>
                </div>
            </div>
            <strcoll-container>
                <div class="cont_mss">
                    <?php
                        $resMensajes = $mensajes->query_select_mensajes_By_Usuario($row['ID_Usuario'], $row['ID_Curso']);
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
                <button class="enviar"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>