<?php
require "backoffice/security/security.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/logo/GameHub.png">
    <script src="https://kit.fontawesome.com/f7f80355db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Inicio</title>
</head>

<body>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">GameHub</strong>
                <small>Ahora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            </div>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg color fixed-top">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index.php">
                    <img src="assets/logo/GameHub.png" alt="GameHub" class="img-logo mr-2" id="logo">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white current" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="profile.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="library.php">Mis juegos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white btn-logOut">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid foto">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mt-5">
                    <div>
                        <img src="assets/logo/GameHub2.png" alt="GameHub" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid lateral pb-5">
        <div class="container bk-color rounded">
            <div class="row justify-content-center">
                <div class="mt-2">
                    <h2 class="ml-3 font-weight-bold mt-2">Nuestros favoritos :)</h2> <!--  Fav = 1 -->
                    <h5 class="text-secondary">No te los puedes perder</h5>
                </div>
                <div id="recomendados" class="row row-cols-1 row-cols-sm-2 row-cols-md-6 mt-3">

                </div>
            </div>
            <hr>
            <div class="row justify-content-center ">
                <div>
                    <h2 class="ml-3 font-weight-bold">Últimos lanzamientos</h2> <!--  Fecha mas reciente (10 juegos) -->
                    <h5 class="text-secondary">Los ultimos juegos lanzados al mercado</h5>
                </div>
                <div id="ultimos" class="row row-cols-1 row-cols-sm-2 row-cols-md-6 mt-3">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center ">
                <div>
                    <h2 class="ml-3 font-weight-bold">Mejor valorados</h2> <!--  Mejor puntuacion (8 juegos) -->
                    <h5 class="text-secondary">Los juegos con mayor puntuación</h5>
                </div>
                <div id="masValorados" class="row row-cols-1 row-cols-sm-2 row-cols-md-6 mt-3">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <h2 class="ml-3 font-weight-bold">Todos los juegos</h2> <!-- All games -->
                <h5 class="text-secondary">Aquí encontraras todos los juegos disponibles</h5>
                <div class="btn-group mt-3 d-flex flex-wrap" role="group">
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-all" genre="All">Todos</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Aventura">Aventura</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Plataformas">Plataformas</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Carreras">Carreras</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Terror">Terror</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre" genre="Rol">Rol</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Deportes">Deportes</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Shooter">Shooter</button>
                    <button type="button" class="btn btn-dark col-6 col-md-auto mb-2 btn-genre"
                        genre="Pelea">Pelea</button>
                </div>
            </div>
            <div id="todosLosJuegos" class="row row-cols-1 row-cols-sm-2 row-cols-md-6 mt-3 pb-4"
                style="max-height: 700px; overflow-y: auto;">

            </div>
            <br>
        </div>
        <div class="container bk-color rounded">
            <div class="mt-4">
                <h2 class="ml-3 pt-3 font-weight-bold">Frases icónicas de los videojuegos</h2>
            </div>
            <div class="row mt-4 game-font">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Red Dead Redemption</h5>
                            <p class="card-text"><em>Algunos árboles florecen; otros, mueren. Algunas reses crecen
                                    fuertes, otras son devoradas por lobos. Algunos hombres nacen lo bastante ricos e
                                    idiotas para disfrutar de la vida. Nada es justo. Ya lo sabes.</em></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Final Fantasy VII</h5>
                            <p class="card-text mb-2"><em>Es increíble lo que una persona puede llegar a olvidar... pero
                                    es
                                    más sorprendente lo que puede llegar a esconder</p></em>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">God of War 3</h5>
                            <p class="card-text mb-2"><em>La esperanza es lo que nos hace fuertes. Es la razón del por
                                    qué estamos aquí. Es por lo que peleamos cuando todo lo demás está perdido
                            </p></em>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Más proximamente...</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="row text-align-center justify-content-center">
                <h5>Made with ❤️ by Jose Moreno</h5>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
        </script>

    <script>
        $(document).ready(function () {
            //Carga de los juegos recomendados por mi (Fav = 1)
            var option = 1;
            $.ajax({
                type: 'POST',
                url: 'backoffice/controllers/games-controller.php',
                datatype: 'text',
                data: {
                    option: option
                },
                success: function (a) {
                    $("#recomendados").html(a);
                }
            });
            //Cargo los ultimos juegos lanzados al mercado (Fecha mas reciente)
            var option = 2;
            $.ajax({
                type: 'POST',
                url: 'backoffice/controllers/games-controller.php',
                datatype: 'text',
                data: {
                    option: option
                },
                success: function (a) {
                    $("#ultimos").html(a);
                }
            });
            //Cargo los juegos con mayor puntuacion y se ordenan de mas a menos
            var option = 3;
            $.ajax({
                type: 'POST',
                url: 'backoffice/controllers/games-controller.php',
                datatype: 'text',
                data: {
                    option: option
                },
                success: function (a) {
                    $("#masValorados").html(a);
                }
            });
            //Cargo todos los juegos
            var option = 4;
            $.ajax({
                type: 'POST',
                url: 'backoffice/controllers/games-controller.php',
                datatype: 'text',
                data: {
                    option: option
                },
                success: function (a) {
                    $("#todosLosJuegos").html(a);
                }
            });
            //Mando el genero de los juegos que se quieren ver y los cargo en su div
            $(".btn-genre").click(function () {
                var genre = $(this).attr("genre");
                var option = 5;
                $.ajax({
                    type: 'POST',
                    url: 'backoffice/controllers/games-controller.php',
                    datatype: 'text',
                    data: {
                        option: option,
                        genre: genre
                    },
                    success: function (a) {
                        $("#todosLosJuegos").html(a);
                    }
                });
            });

            //Cargar todos los juegos al pulsar el boton de todos
            $(".btn-all").click(function () {
                var genre = $(this).attr("genre");
                var option = 4;
                $.ajax({
                    type: 'POST',
                    url: 'backoffice/controllers/games-controller.php',
                    datatype: 'text',
                    data: {
                        option: option,
                    },
                    success: function (a) {
                        $("#todosLosJuegos").html(a);
                    }
                });
            });

            //Cerrar sesion
            $(".btn-logOut").click(function () {
                var option = 3;
                $.ajax({
                    type: 'POST',
                    url: 'backoffice/controllers/users-controller.php',
                    datatype: 'text',
                    data: {
                        option: option
                    },
                    success: function (a) {
                        window.location.reload();
                    }
                });
            });
        });
    </script>
</body>

</html>