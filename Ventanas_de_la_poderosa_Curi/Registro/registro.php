<link rel="stylesheet" href="../Login/login.css">
<link rel="stylesheet" href="../Navegacion/nav.css">
<link rel="stylesheet" href="./registro.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../JavaScript/Validaciones.js"></script>
<div class="contenedor">
    <div class="bloque">
        <a href="../principal/h.php"> <img src="/Cubbi_BDM_PWCI/Ventanas_de_la_poderosa_Curi/Multimedia/logo.png" alt="logo" class="logo"> </a>
        <div class="contenido">
            <div class="tittle ">
                <h1> Registro</h1>
            </div>
            <div class="cont-texto">
                <form action="../..//Controladores/db_registro.php" method="post">
                    <div class="email cont">
                        <select name="tipous" id="idus" class="select_us">
                            <option value="1">Estudiante</option>
                            <option value="2">Maestro</option>
                        </select>
                    </div>
                    <div class="email cont">
                        <h1>Nombre de usuario</h1>
                        <input type="text" id="inputsearch" placeholder="Nick name" name="nickname" class="diseno-input" vali="usu">
                    </div>
                    <div class="email cont">
                        <h1>Nombre</h1>
                        <input type="text" id="inputsearch" placeholder="Nombre" name="nombre" class="diseno-input" vali="nom">
                    </div>
                    <div class="email cont">
                        <h1>Apellidos</h1>
                        <input type="text" id="inputsearch" placeholder="Apellidos" name="apellidos" class="diseno-input" vali="apes">
                    </div>
                    <div class="email cont">
                        <h1>Correo</h1>
                        <input type="text" id="inputsearch" placeholder="Correo" name="correo" class="diseno-input" vali="email">
                    </div>
                    <div class="Genero_Fecha email">
                        <div class="cabecera">
                            <h1>Genero</h1>
                            <select name="genero" id="Genero">
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="cabecera">
                            <h1>Cumpleaños</h1>
                            <input type="date" id="start" name="trip-start" min="1921-07-07" class="data_btd" vali="Fnac">
                        </div>
                    </div>
                    <div class="pass cont">
                        <h1>Contraseña</h1>
                        <input type="password" id="inputsearch" placeholder="Contraseña" name="password" class="diseno-input" vali="contra">
                    </div>
                    <div class="pass cont">
                        <h1>Confirmar contraseña</h1>
                        <input type="password" id="inputsearch" placeholder="Contraseña" class="diseno-input" vali="contraConfi">
                    </div>
                    <button class="btn-inicio"> Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>