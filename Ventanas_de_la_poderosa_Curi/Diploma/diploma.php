<?php
require("../../Controladores/db_diploma.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./diploma.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
</head>

<body>
    <?php foreach($resDiplomaInfo as $row){ ?>
    <div class="cubo1">
        <img src="../Multimedia/diplomabasico.jpg" alt="">
        <h1 class="Estudiante"><?php echo $row['Alumno']; ?></h1><br>
        <h1 class="Curso"><?php echo $row['Curso']; ?></h1>
        <h2 class="Fecha"><?php echo $row['Fecha']; ?></h2>
        <h2 class="Maesto"><?php echo $row['Profesor']; ?></h2>
    </div>
    <?php } ?>
</body>

</html>