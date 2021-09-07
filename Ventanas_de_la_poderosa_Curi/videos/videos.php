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
                    <video class="video_contenido" controls>
                        <source src="../Multimedia/Campaña 'Cuidado con el perro' - Recojo la caca.mp4" type="video/mp4">                    
                    </video>
                
            </div>
            <div class="informacion">
                <div class="cabecera">
                    <a href="../elcurso/vista.php"> <i class="fas fa-arrow-left"></i></button</a>    
                    <div class="separacion">
                        <div class="cont_video">
                            <a href="#"> <img src="../Multimedia/logo.png" alt="" class="logo"></a>                             
                        </div>                        
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