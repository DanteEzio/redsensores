<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Espacio</title>

    <!-- Bootstrap - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- Bootstrap - JavaScript -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/c98c29ff31.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css" />

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Archivos JS -->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Archivos JS -->
    <script defer src="../js/selectEspacio.js"></script>
    <script defer src="../js/vFormularioEspacio.js"></script>

</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent sticky-top">
            <div class="container">
                <!-- Logo -->
                <!-- <a class="navbar-brand" href="../index.html">
                    <img src="../imagenes/logoipsum-logo-16.svg" alt="" />
                </a> -->
                <!-- Pestañas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Offcanvas
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <!-- Pestañas izquierda -->
                        <ul class="navbar-nav justify-content-start align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="fProfesor.php">Formulario Profesor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="fEspacio.php">Formulario Espacio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="bProfesores.php">Buscador</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="fEspacio">
            <!-- Foto-principal -->
            <section class="imgEspacioPrincipal">
                <section class="foto-principal container-fluid">
                    <div class="card text-bg-dark">
                        <div class="card-img-overlay">
                            <h1 class="card-title">
                                Completa los Siguientes Campos
                            </h1>
                        </div>
                    </div>
                </section>
            </section>
            <!-- Formularios -->
            <section class="formularios mx-auto">
                <div class="container categoria">
                    <form action="" id="formData2" method="POST">
                        <h3>Información del Espacio</h3>
                        <!-- Nombre del Edificio -->
                        <div class="mb-3 nEdificio">
                            <label for="exampleInputEmail1" class="form-label">Edificio: </label>
                            <select class="form-select nombreEdificio" name="nombreEdificio" aria-label="Default select example" id="nombreEdificio">
                            </select>
                        </div>

                        <!-- Nombre del Espacio -->
                        <div class="mb-3 nEspacio">
                            <label for="exampleInputEmail1" class="form-label">Nombre del Espacio:</label>
                            <div class="mb-3">
                                <input type="text" name="nombreEspacio" class="form-control nombreEspacio" id="nombreEspacio" aria-describedby="emailHelp" placeholder="Ingresa el Nombre del Espacio" />
                            </div>
                        </div>

                        <!-- Numero del espacio -->
                        <div class="mb-3 num">
                            <label for="exampleInputEmail1" class="form-label">Número del Espacio:</label>
                            <div class="mb-3">
                                <input type="number" name="numero" class="form-control numero" id="numero" aria-describedby="emailHelp" placeholder="Ingresa el número del edificio" />
                            </div>
                        </div>

                        <!-- Descripción del Espacio -->
                        <div class="mb-3 dEspacio">
                            <label for="exampleInputEmail1" class="form-label">Descripción del espacio:</label>
                            <div class="mb-3">
                                <textarea type="text" name="descripcion" class="form-control descripcion" id="descripcion" rows="3" placeholder="Ingresa la Descripción del espacio"></textarea>
                            </div>
                        </div>

                        <!-- Profesores que se encuentran en ese Espacio -->
                        <!-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Profesores que se encuentran en ese Espacio:</label>
                            <div class="row container-fluid" id="profesores">
                            </div>
                        </div> -->
                        <div class="mb-3 pEspacio">
                            <label for="exampleInputEmail1" class="form-label">Profesores que se encuentran en ese Espacio:</label>
                            <select class="form-control selectpicker profesores" name="profesores[]" aria-label="multiple select example" id="profesores" multiple>
                            </select>
                        </div>

                        <!-- Nombre del Profesor Encargado -->
                        <div class="mb-3 pEncargado">
                            <label for="exampleInputEmail1" class="form-label">Profesor Encargado: </label>
                            <select class="form-select profesorEncargado" name="profesorEncargado" aria-label="Default select example" id="profesorEncargado">
                            </select>
                        </div>

                        <!-- Fecha desde que se encuentra enrcargado -->
                        <!-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fechaIngreso">Fecha de ingreso como encargado</label>
                            <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" aria-describedby="emailHelp" />
                        </div> -->

                        <div class="botonEnviar">
                            <button type="button" class="btn btn-primary enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <section class="text-center">
            <h6>Copyright © Todos los derechos reservados.</h6>
            <h6>Designed by Erick Loza</h6>
        </section>
    </footer>

</body>

</html>