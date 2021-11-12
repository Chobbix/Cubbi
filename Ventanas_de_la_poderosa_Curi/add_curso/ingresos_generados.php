<div class="contenedor-guardado bloque_contenedor_cursos" id="Registro">
    <div class="cont_cursos">
        <div class="contenedor-Todos container-dis">
            <div class="fitro">
                <div class="contenedor-filtro">
                    <input type="radio" id="Todos" name="curso" value="todos" checked>
                    <input type="radio" id="sinver" name="curso" value="sinver">
                    <input type="radio" id="progreso" name="curso" value="progreso">
                    <input type="radio" id="Completos" name="curso" value="completos">
                    <input type="radio" id="inexistentes" name="curso" value="inexistentes">
                    <div class="contenedor-filtros">
                        <div class="cont-btn-filtro">
                            <ul class="nav-filtro">
                                <li> <a href="#" class="diseño">
                                        <h1 class="filtro_texto_diseñp">Filtro <i class="fas fa-angle-down"></i></h1>
                                    </a>
                                    <ul>
                                        <li><a href="#"> <label for="Todos">
                                                    <h2 class="design-filtro">Todos</h2>
                                                </label></a></li>
                                        <li> <a href="#"> <label for="sinver">
                                                    <h2 class="design-filtro">Curso especifico</h2>
                                                </label></a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bloque-menu" id="filtrado">

                        <?php
                        foreach($resReporte1 as $row){
                            ?>

                            <div class="contenedor-Todos container-dis">
                                <div class="bloque-containeer">
                                    <h1> <?php echo $row['Titulo']; ?></h1>
                                    <div class="container bloquesito">
                                        <div class="puntuacion"><i class="fas fa-users"></i>
                                            <h2> Cantidad de alumnos registrados: <?php echo $row['Cantidad_Alumnos']; ?></h2>
                                        </div>
                                        <div class="puntuacion"><i class="fas fa-users"></i>
                                            <h2> Promedio curso: <?php echo $row['Porcentaje']; ?>%</h2>
                                        </div>
                                        <div class="puntuacion"><i class="fas fa-coins"></i>
                                            <h2> Ingresos generados: <?php echo number_format($row['Pago'], 2); ?>$</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                        <div class="contenedor-sinver container-dis" id="filtrado">
                            <div class="caja_informativa">
                                <section>
                                    <div class="container">
                                        <div class="accordion">
                                            <div class="accordion-item" id="question1">
                                                <a class="accordion-link" href="#question1">
                                                    <h3>Tema1</h3>
                                                    <i class="fas fa-angle-down"></i>
                                                    <i class="fas fa-angle-up"></i>
                                                </a>
                                                <div class="answer">
                                                    <?php include("./cuadrodesc.php") ?>
                                                </div>
                                            </div>
                                            <div class="accordion-item" id="question2">
                                                <a class="accordion-link" href="#question2">
                                                    <h3>Tema 2</h3>
                                                    <i class="fas fa-angle-down"></i>
                                                    <i class="fas fa-angle-up"></i>
                                                </a>
                                                <div class="answer">
                                                    <?php include("./cuadrodesc.php") ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>