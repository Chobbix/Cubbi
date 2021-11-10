<aside id="modal" class="modal">
    <div class="contenido-modal">
        <header>
            <h1></h1>
            <a href="" class="cerrar">
                <h3 class="x"> <i class="fas fa-times-circle"></i> </h3>
            </a>
        </header>
        <article>
            <div class="contenedor-answer">
                <div class="titulo">
                    <h1 class="question">¿Te gusto el curso?</h1>
                </div>
                <div class="btones">
                    <div class="bloque-editar">
                        <i class="fas fa-heart" curso="<?php echo $_GET['curso']; ?>" usuario="<?php echo $_SESSION['ses_usuario']; ?>"></i>
                        <i class="fas fa-heart-broken" curso="<?php echo $_GET['curso']; ?>" usuario="<?php echo $_SESSION['ses_usuario']; ?>"></i>
                    </div>
                </div>
            </div>
        </article>
    </div>
</aside>