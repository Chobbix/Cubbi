<div class="information">
    <div class="container_img">
        <img src="data:image/png;base64,<?php echo base64_encode($row['Imagen']); ?>" class="imagen" alt="">
    </div>
    <div class="tittle">
        <div class="tittle_curso altura">
            <h2><?php echo $row['Titulo']; ?></h2>
        </div>
        <div class="maestro altura">
            <h5>Impartido: </h5>
            <h5><?php echo $row['Profesor']; ?></h5>
        </div>
        <div class="button_link altura">
            <a href="../Login/login.php" class="btn_link">
                Ver detalles
            </a>

        </div>
    </div>
</div>