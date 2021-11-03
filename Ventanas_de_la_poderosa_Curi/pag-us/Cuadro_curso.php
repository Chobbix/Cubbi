<?php

function ObtenerAllCursosRegistrados($resultados) {

    $txt_button = "";

    foreach($resultados as $row){
        if($row['Porcentaje'] == 0) {
            $txt_button = "Empieza ahora";
        } else if ($row['Porcentaje'] > 0 && $row['Porcentaje'] < 100) {
            $txt_button = "Continua ahora";
        } else {
            $txt_button = "Terminado";
        }
    ?>

    <div class="contenedor-Todos container-dis">
        <div class="bloque-containeer">
            <div class="container">
                <div class="miniatura ">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['img']); ?>" alt="" class="miniatura_ds">
                </div>
                <div class="titulo ">
                    <div class="tittle-text">
                        <h4><?php echo $row['Titulo']; ?></h4>
                    </div>
                </div>
                <div class="porcentaje ">
                    <h5 class="texto"> <?php echo number_format($row['Porcentaje']); ?> %</h5>
                </div>
                <div class="btn-curso ">
                    <a href="../elcurso/vista.php?curso=<?php echo $row['ID_Curso']; ?>"> <button class="btn-curso-ds"><?php echo $txt_button ?></button></a>
                </div>
            </div>
        </div>
    </div>

    <?php

    }
}


function ObtenerCursosNoEmpezados($resultados) {

    $txt_button = "";

    foreach($resultados as $row){
        if($row['Porcentaje'] == 0) {
            $txt_button = "Empieza ahora";
    ?>

    <div   div class="contenedor-sinver container-dis"  id="filtrado" >
        <div class="bloque-containeer">
            <div class="container">
                <div class="miniatura ">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['img']); ?>" alt="" class="miniatura_ds">
                </div>
                <div class="titulo ">
                    <div class="tittle-text">
                        <h4><?php echo $row['Titulo']; ?></h4>
                    </div>
                </div>
                <div class="porcentaje ">
                    <h5 class="texto"> <?php echo $row['Porcentaje']; ?> %</h5>
                </div>
                <div class="btn-curso ">
                    <a href="../elcurso/vista.php?curso=<?php echo $row['ID_Curso']; ?>"> <button class="btn-curso-ds"><?php echo $txt_button ?></button></a>
                </div>
            </div>
        </div>
    </div>

    <?php

        }
    }
}


function ObtenerCursosNoTerminados($resultados) {

    $txt_button = "";

    foreach($resultados as $row){
        if ($row['Porcentaje'] > 0 && $row['Porcentaje'] < 100) {
            $txt_button = "Continua ahora";
    ?>

    <div class="contenedor-progreso container-dis"  id="filtrado" >
        <div class="bloque-containeer">
            <div class="container">
                <div class="miniatura ">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['img']); ?>" alt="" class="miniatura_ds">
                </div>
                <div class="titulo ">
                    <div class="tittle-text">
                        <h4><?php echo $row['Titulo']; ?></h4>
                    </div>
                </div>
                <div class="porcentaje ">
                    <h5 class="texto"> <?php echo number_format($row['Porcentaje']); ?> %</h5>
                </div>
                <div class="btn-curso ">
                    <a href="../elcurso/vista.php?curso=<?php echo $row['ID_Curso']; ?>"> <button class="btn-curso-ds"><?php echo $txt_button ?></button></a>
                </div>
            </div>
        </div>
    </div>

    <?php

        }
    }
}


function ObtenerCursosTerminados($resultados) {

    $txt_button = "";

    foreach($resultados as $row){
        if ($row['Porcentaje'] == 100){
            $txt_button = "Terminado";
    ?>

    <div class="contenedor-Completos container-dis"  id="filtrado" >
        <div class="bloque-containeer">
            <div class="container">
                <div class="miniatura ">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['img']); ?>" alt="" class="miniatura_ds">
                </div>
                <div class="titulo ">
                    <div class="tittle-text">
                        <h4><?php echo $row['Titulo']; ?></h4>
                    </div>
                </div>
                <div class="porcentaje ">
                    <h5 class="texto"> <?php echo number_format($row['Porcentaje']); ?> %</h5>
                </div>
                <div class="btn-curso ">
                    <a href="../elcurso/vista.php?curso=<?php echo $row['ID_Curso']; ?>"> <button class="btn-curso-ds"><?php echo $txt_button ?></button></a>
                </div>
            </div>
        </div>
    </div>

    <?php

        }
    }
}


function ObtenerCursosSoloTuyos($resultados) {

    $txt_button = "";

    foreach($resultados as $row){
        if($row['Porcentaje'] == 0) {
            $txt_button = "Empieza ahora";
        } else if ($row['Porcentaje'] > 0 && $row['Porcentaje'] < 100) {
            $txt_button = "Continua ahora";
        } else {
            $txt_button = "Terminado";
        }
    ?>

    <div class="contenedor-inexistentes container-dis"  id="filtrado" >
        <div class="bloque-containeer">
            <div class="container">
                <div class="miniatura ">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['img']); ?>" alt="" class="miniatura_ds">
                </div>
                <div class="titulo ">
                    <div class="tittle-text">
                        <h4><?php echo $row['Titulo']; ?></h4>
                    </div>
                </div>
                <div class="porcentaje ">
                    <h5 class="texto"> <?php echo number_format($row['Porcentaje']); ?> %</h5>
                </div>
                <div class="btn-curso ">
                    <a href="../elcurso/vista.php?curso=<?php echo $row['ID_Curso']; ?>"> <button class="btn-curso-ds"><?php echo $txt_button ?></button></a>
                </div>
            </div>
        </div>
    </div>

    <?php

    }
}

?>