<div class="answer">
    <div class="container">
        <div class="puntuacion"> <h1><?php echo $row2['Nombre_Completo']; ?></h1></div>
        <div class="puntuacion"> <i class="fas fa-users"></i> <h1>Fecha de inscripcion: <?php echo $row2['Fecha_Inscripcion']; ?></h1></div>
        <div class="puntuacion"> <h1>Comepletado: <?php echo $row2['Porcentaje']; ?>%</h1></div>
        <div class="puntuacion"> <i class="fas fa-coins"></i> <h1>$<?php echo number_format($row2['Pago'], 2, '.', ','); ?></h1></div>
        <div class="puntuacion"> <i class="fas fa-coins"></i> <h1><?php echo $row2['Tipo_de_Pago']; ?></h1></div>
    </div>
</div>