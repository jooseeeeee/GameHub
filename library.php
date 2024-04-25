<?php
require "backoffice/security/security.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/logo/GameHub.png">
    <script src="https://kit.fontawesome.com/f7f80355db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/library.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Mis juegos</title>
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
    <header class="fixed-top mb-5">
        <nav class="navbar navbar-expand-lg color">
            <div class="container-fluid">
                <a href="index.php">
                    <img src="assets/logo/GameHub.png" alt="GameHub" class="img-logo mr-2" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="profile.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white current" href="library.php">Mis juegos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white btn-logOut">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid lateral pb-5 d-flex align-items-stretch">
        <div class="container bk-color rounded">
            <div class="row justify-content-center mt-5">
                <div class="mt-5">
                </div>
                <h2 class="ml-3 font-weight-bold">Juegos</h2>
                <h5 class="text-secondary">Echa un vistazo a tu colección</h5>
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
            <div id="userGames" class="row row-cols-1 row-cols-sm-2 row-cols-md-6 mt-3 pb-4 flex-grow-1 main-container">

            </div>
        </div>
        <br>
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
            // Cargar los juegos de la biblioteca del usuario
            let option = 1
            $.ajax({
                url: "backoffice/controllers/library-controller.php",
                type: "POST",
                datatype: 'text',
                data: {
                    option: option,
                },
                success: function (a) {
                    $("#userGames").html(a);
                }
            });
            // Filtrar juegos por género
            $(".btn-genre").click(function () {
                let genre = $(this).attr("genre");
                let option = 2;
                $.ajax({
                    url: "backoffice/controllers/library-controller.php",
                    type: "POST",
                    datatype: 'text',
                    data: {
                        option: option,
                        genre: genre
                    },
                    success: function (a) {
                        $("#userGames").html(a);
                    }
                });
            });
            // Mostrar todos los juegos
            $(".btn-all").click(function () {
                let option = 1;
                $.ajax({
                    url: "backoffice/controllers/library-controller.php",
                    type: "POST",
                    datatype: 'text',
                    data: {
                        option: option
                    },
                    success: function (a) {
                        $("#userGames").html(a);
                    }
                });
            });
            //Cerrar sesión
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
<!-- 