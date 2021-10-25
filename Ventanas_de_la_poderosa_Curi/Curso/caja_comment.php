<div class="contenedor_coment">
    <div class="sub_caja">
        <img src="data:image/png;base64,<?php echo base64_encode($row['img']); ?>" alt="" class="perfil">
        <div class="caja_perfil">
            <div class="caja_nickname">
                <h3> <?php echo $row['Usuario']; ?> </h3>
            </div>    
            <div class="coment">
                <h3 class="comentario"> <?php echo $row['Comentario']; ?>
                </h3>
            </div> 
        </div>
    </div>
</div>