<?php

if($usuarioID != 'Ninguna'){
    $consulta = new Consulta();
    $consulta->setId_Usuario($usuarioID);
    $resultado = $consulta->query_select_Usuario_by_Perfil();

    foreach($resultado as $row) {
?>
<ul class="nav-perfil">
    <li>
    <li>
        <?php 
            if(is_null($row['Foto_Perfil'])){
                ?>
                    <a href="" class="clase-a"> <img src="../Multimedia/predeterminado.png" alt="" class="perfil"> </a>
                <?php
            }
            else {
                ?>
                    <a href="" class="clase-a"> <img src="data:image/png;base64,<?php echo base64_encode($row['Foto_Perfil']); ?>" alt="" class="perfil"> </a>
                <?php
            }
        ?>

        <ul class="a">
            <li>
                <a href="../perfil/perfil.php" class="botones-perfil">
                    <h3>Mi perfil</h3>
                </a>
            </li>
            <li>
                <a href="../pag-us/info.php" class="botones-perfil">
                    <h3>Informacion</h3>
                </a>
            </li>
            <?php 
                if($usuarioRol != "Ninguna"){
                    if($usuarioRol == "2"){
                    ?>
                        <li>
                            <a href="../add_curso/load.php" class="botones-perfil">
                                <h3>Agregar curso</h3>
                            </a>
                        </li>
                    <?php
                    }
                }
            ?>
            <hr>
            <li>
                <a href="../principal/h.php" class="botones-perfil">
                    <h3>cerrar sesion</h3>
                </a>
            </li>
        </ul>
    </li>
</ul>

<?php

    }
} 

?>