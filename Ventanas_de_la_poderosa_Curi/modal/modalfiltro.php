<aside id="modal" class="modal"> 
    <div class="contenido-modal"> 
        <header>
            <h1>Filtro</h1>
            <a href="#" class="cerrar"> <h3 class="x"> <i class="fas fa-times-circle"></i> </h3> </a>
        </header>
        <article>
            <div class="contenedor-answer">   
                <div class="bloque-menu"  id="Registro">
                <scroll-container class="modal_scroll">
                    <div class="bloque-contenido">
                        <form action="../Pagduplicada/busqueda.php?categoria=<?php echo $categoriaGet."&opc=4&user=".$userGet."&busqueda=".$txtBusquedaGet."&dateIni=".$dateIni."&dateFin=".$dateFin;?>" method="post">
                            <div class="contenedor-Preg" >
                                <div class="bloque-editar">
                                    <h1>Fecha de inicio</h1>
                                    <input type="date" name="dateIni" class="calendario_filtro" value="<?php echo $dataIni ?>">
                                    <h1>Fecha final</h1>
                                    <input type="date" name="dateFin" class="calendario_filtro" value="<?php echo $dataFin ?>">
                                    <h1></h1>
                                </div>
                            </div> 
                            <div class="btn-guardado">
                                <a href="../Pagduplicada/busqueda.php" class="save-modal">  <button  class="btn-guarda">Buscar</button>   </a>
                            </div>   
                        </form>
                    </div>                                      
                </scroll-container>                                      
            </div>                                     
        </div>
        </article>
    </div>
</aside>