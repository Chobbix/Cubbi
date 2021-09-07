<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="./videos.css">
    <link rel="stylesheet" href="../accordion/accordion.css">
    <script src="https://kit.fontawesome.com/5554cc4983.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <div class="bloque_contenedor">
            <div class="video">
                <img src="../Multimedia/c.gif" alt="" class="video_contenido">
            </div>
            <div class="informacion">
                <div class="cabecera">
                    <div class="separacion">
                        <a href="#"> <img src="../Multimedia/logo.png" alt="" class="logo"></a>
                    </div>
                    <div class="perfil">
                        <?php include ("../Navegacion/perfil.php");?>
                    </div>                  
                </div> 
                <div class="bloque_contenedor">
                    <div class="tema">                        
                        <?php include ("../accordion/accordion.php");?>     
                    </div>
                </div>            
            </div>
        </div>
    </div>
</body>
</html>