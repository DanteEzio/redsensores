<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Profesor</title>

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
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> -->


    <!-- Archivos JS -->
    <script defer src="../js/pProfesores.js"></script>
    <!-- <script defer src="../js/vFormularioProfesor.js"></script> -->

</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent sticky-top">
            <div class="container">
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
                                <a class="nav-link" aria-current="page" href="fEspacio.php">Formulario Espacio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="bProfesores.php">Buscador</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="fProfesor">
            <!-- Foto-principal -->
            <section class="imgProfesorPrincipal">
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
                    <section class="buscador">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" id="formData" method="GET">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ingresa el nombre del registro que desea buscar:</label>
                                <input id="campo" type="text" name="busqueda" class="form-control" id="exampleFormControlInput1" placeholder="Buscar">
                            </div>
                            <div class="buscador">
                                <button id="enviar" type="submit" name="campo" class="btn btn-primary enviar">Buscar</button>
                            </div>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                </tr>
                            </thead>
                            <tbody class="tabla">
                                <!-- <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </section>
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