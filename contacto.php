<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-C" OMPATIBLE content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="contacto">
    <header>
        <nav class="navbar navbar-expand-md mb-4  ">
            <div class="container ">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link px-4 py-1" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">

                        <a class="btn btn-rojo">Descargar mi CV <i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes envíandome un mensaje o bien por whatsApp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form class=from action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="Tel" name="txtTelefono/whatsApp" id="txtTelefono/whatsApp"
                            placeholder="Teléfono/WhatsApp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar"
                            class="btn btn-blanco px-4">ENVIAR</button>

                    </div>
                </form>
            </div>

        </div>
        
    </main>
    <footer class="container">
        <div class="row  m-5  ">
            <div class=" col-12 col-sm-3">
                <i class="fa-brands fa-github iconos m-2" ></i>
                <i class="fa-brands fa-linkedin-in iconos mb-5 pt-2"></i>
            </div>
            <div class=" col-12 col-sm-3">Sponsor<a href="http://depcsuite.com">DePC Suite</a></div>
            <div class=" col-12 col-sm-3"> <a href="mail.to:contacto@yamilamorales.com.ar">contacto@yamilamorales.com.ar</a></div>
        </div>
    </footer>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="http?//api.whatsapp.com/send?phone1168372742" title="whatsApp">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>