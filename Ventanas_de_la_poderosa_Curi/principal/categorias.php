<br>
<link rel="stylesheet" href="./masvendido.css">
<div class="Container_update">
    <div class="container_CAT">
        <h1> La gente compro</h1>
        <?php
        foreach($resVendidos as $row) {
            include("./information.php");
        }
        ?>

    </div>
    <div class="container_CAT">
        <h1> La gente le gusto</h1>
        <?php
        foreach($resCalificados as $row) {
            include("./information.php");
        }
        ?>
    </div>
</div>