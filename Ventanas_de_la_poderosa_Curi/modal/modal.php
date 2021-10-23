<aside id="modal" class="modal">
    <div class="contenido-modal">
        <header>
            <h1>Editor</h1>
            <a href="#" class="cerrar">
                <h3 class="x"> <i class="fas fa-times-circle"></i> </h3>
            </a>
        </header>
        <article>
            <div class="contenedor-answer">
                <input type="radio" id="Preguntas" name="categoria" value="preguntas" checked>
                <input type="radio" id="Respuestas" name="categoria" value="Respuestas">
                <div class="contenedor-categoria">
                    <label for="Preguntas">
                        <h6 class="design-tittle separacion">Perfil</h6>
                    </label>
                    <label for="Respuestas">
                        <h6 class="design-tittle">Contraseña</h6>
                    </label>
                </div>
                <div class="bloque-menu" id="Registro">
                    <scroll-container>
                        <form action="../../Controladores/db_foto_perfil_nickname.php" method="post" enctype="multipart/form-data">
                            <div class="bloque-contenido">
                                <div class="contenedor-Preg">
                                    <div class="bloque-editar">
                                        <div class="bloque_ftperfil">
                                            <div class="ft_perfil">
                                                <img src="data:image/png;base64,<?php echo base64_encode($user->get_img()); ?>" alt="" class="perfilus">
                                                <button class="btn_enviar"> <input type="file" name="imagensubida" accept="image/png, .jpeg, .jpg"></button>
                                            </div>
                                        </div>
                                        <div class="divisorio">
                                            <h1 class="selector" id="type">Nick name</h1>
                                            <input type="text" name= "nickname">
                                        </div>
                                    </div>
                                </div>
                                <div class="contenedor-resp" id="Registro">
                                    <div class="bloque-editar">
                                        <div class="divisorio">
                                            <h1 class="selector " id="type">Contraseña original:</h1>
                                            <input type="text">
                                        </div>
                                        <div class="divisorio">
                                            <h1 class="selector a" id="type">Nueva Contraseña</h1>
                                            <input type="text">
                                        </div>
                                        <div class="divisorio">
                                            <h1 class="selector a" id="type">confirmar Contraseña</h1>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-guardado">
                                    <input type="submit" class="btn-guarda" class="save-modal"></input>
                                </div>
                            </div>
                        </form>
                    </scroll-container>
                </div>
            </div>
        </article>
    </div>
</aside>