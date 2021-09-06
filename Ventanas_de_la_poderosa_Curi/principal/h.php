<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5554cc4983.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./principal.css">
    <title>Hello, world!</title>
</head>
<body> 
    <header class="header">
    <nav class="nav">           
            <a href="#"> <img src="/Cubbi_BDM_PWCI/Ventanas_de_la_poderosa_Curi/Multimedia/logo.png" alt="logo" class="logo">  </a>   
            <ul class="nav-menu">                 
                <ul class="menu-categorias">
                    <li><a href="#" class="clase-a">Cursos <i class="fas fa-angle-down"></i></a>                    
                        <ul class="longitud">
                            <li><a href="#" >Categorias </a>                            
                                <ul class="diseno">
                                    <scroll-container>
                                        <li><a href="../Cursos/cursos.php"> Azucar </a></li>
                                        <li><a href="../Cursos/cursos.php">leche</a></li>
                                        <li><a href="../Cursos/cursos.php">huevos</a></li>
                                        <li><a href="../Cursos/cursos.php">Azucar</a></li>                                                                                     
                                    </scroll-container>
                                    
                                </ul>
                            </li>
                            <li class="a"><a href="#">Lo mas nuevo </a>
                                <ul class="diseno">
                                    <scroll-container>
                                        <li><a href="#">dinero</a></li>
                                        <li><a href="#">dinero</a></li>
                                        <li><a href="#">dinero</a></li>
                                        <li><a href="#">dinero</a></li>                                                                                     
                                    </scroll-container>
                                </ul>                                
                            </li>                                
                        </ul>
                    </li>                    
                </ul>               
                <li><a href="#" class="nav-item buscador " > <input type="text"  id="inputsearch" placeholder="¿Que vas a aprender?"class="search"> </li>
                <li><a href="../Cursos/cursos.php" class="nav-item buscador "> <i class="fas fa-search"></i></a></li>
                <li><a href="../Login/login.php"> <button class="btn-sesion">Iniciar sesion</button></a></li>
                <li><a href="#">  <button class="btn-log">Registrarse</button></a></li>               
            </ul>
        </nav>
    </header>  
    
    
    <div class="container">
        <h1>Lo nuevo:</h1>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="../Curso/curso.php">
                    <img src="../Multimedia/c.gif" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="texto">*Titulo curso*</h1>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="../Curso/curso.php">
                    <img src="../Multimedia/b.gif" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h1 class="texto">*Titulo curso*</h1>                
                    </div>
                </a>

        </div>
        <div class="carousel-item">
            <a href="../Curso/curso.php">            
                <img src="../Multimedia/a.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="texto">*Titulo curso*</h1>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="../Curso/curso.php">
                <img src="../Multimedia/d.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="texto">*Titulo curso*</h1>
                </div>
            </a>
        </div>
        <div class="carousel-item">
            <a href="../Curso/curso.php">
                <img src="../Multimedia/e.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="texto">*Titulo curso*</h1>
                </div>
            </a>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>