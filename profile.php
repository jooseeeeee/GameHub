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
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Perfil</title>
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
                            <a class="nav-link text-white current" href="profile.php">Perfil</a>
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
    </header>

    <div class="container-fluid2 foto pb-5 mt-5">
        <div class="container-lg bk-color rounded shadow">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="mt-5">
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card mb-3 card-div">
                                <div class="card-header">
                                    <h5 class="fs-5 font-weight-bold mt-1">Información del perfil</h5>
                                </div>
                                <div class="card-body" id="userInfo">

                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card mb-3 pb-3 card-div">
                                <div class="card-header">
                                    <h5 class="fs-5 font-weight-bold mt-1">Tus juegos favoritos</h5>
                                </div>
                                <div class="card-body fav-container">
                                    <div class="row row-cols-1 row-cols-md-5 g-4 rounded" id="favGames">

                                    </div>
                                </div>
                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
    </script>
<script>
    $(document).ready(function () {
        // Cargar los juegos favoritos del usuario
        let option = 10
        $.ajax({
            url: 'backoffice/controllers/games-controller.php',
            type: 'POST',
            datatype: 'text',
            data: { option },
            success: function (a) {
                $('#favGames').html(a)
            }
        })

        // Cargar la información del usuario
        let option2 = 4
        $.ajax({
            url: 'backoffice/controllers/users-controller.php',
            type: 'POST',
            datatype: 'text',
            data: { option: option2 },
            success: function (a) {
                $('#userInfo').html(a)
            }
        })

        // Cerrar sesión
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

                }
            });
        });


    });

</script>

</html>