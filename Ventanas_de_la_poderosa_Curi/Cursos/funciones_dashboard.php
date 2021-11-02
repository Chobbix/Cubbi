<?php

function imprimir_dashboard($resultado){
    foreach($resultado as $row) {

    ?>
    <div class="contenedor">              
        <a href="../Curso/curso.php?curso=<?php echo $row['ID']; ?>">   <img src="data:image/png;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="" class="video"> </a>
        <div class="cabecera">
            <a href="../Curso/curso.php?curso=<?php echo $row['ID']; ?>"><h1><?php echo $row['Titulo']; ?></h1> </a>
        
        </div>
        <h5><?php echo $row['Profesor']; ?></h5>
        <div class="informacion_megusta">
            <div class="me_gusta informacion_megusta">
                <i class="far fa-heart"></i>
                <h6><?php echo $row['Likes']; ?></h6>
            </div>
            <div class="personas informacion_megusta">
                <i class="far fa-user"></i>
                <h6><?php echo $row['Registros_Cantidad']; ?></h6>
            </div>
        </div>
    </div>

    <?php
    }
}

?>