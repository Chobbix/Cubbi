<?php

function ObtenerAllCursosRegistrados() {

    $txt_button = "";
    $consultaRegistrados = new Consulta();
    $resCursosregistrados = $consultaRegistrados->query_select_cursosReg_By_Usuario($_SESSION['ses_usuario']);

    foreach($resCursosregistrados as $row){

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

function ObtenerCursosNoEmpezados() {
    $txt_button = "";
    $consultaRegistrados = new Consulta();
    $resCursosregistrados = $consultaRegistrados->query_select_cursosReg_By_Usuario($_SESSION['ses_usuario']);

    foreach($resCursosregistrados as $row){

        if($row['Porcentaje'] == 0) {
            $txt_button = "Empieza ahora";
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
                        <h5 class="texto"> <?php echo $row['Porcentaje']; ?> %</h5>
                    </div>
                    <div class="btn-curso ">
                        <a href="../elcurso/vista.php"> <button class="btn-curso-ds"><?php echo $txt_button ?></button></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
    }

}

?>