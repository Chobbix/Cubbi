<div class="container">
    <h1>Lo nuevo:</h1>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $isFirst = true;
            $clase = "carousel-item active";
            foreach($resNuevos as $row) {
                ?>
                <div class="<?php echo $clase; ?>">
                    <a href="../Login/login.php">
                        <img src="data:image/png;base64,<?php echo base64_encode($row['Imagen']); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="texto"><?php echo $row['Titulo']; ?></h1>
                        </div>
                    </a>
                </div>
                <?php

                if($isFirst == true) {
                    $isFirst = false;
                    $clase = "carousel-item";
                }
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>