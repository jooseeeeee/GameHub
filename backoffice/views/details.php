<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/logo/GameHub.png">
    <link rel="stylesheet" href="css/details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>GameHub</title>

</head>

<body>
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
    <div class="container-fluid foto pb-5 mt-5">
        <div class="container bk-color rounded">
            <div class="row">
                <div class="mt-5">   
                </div>

                <div class="col-md-6 mb-4 pt-5">
                    <div class="custom-div-infoJuego ml-4">
                        <h2 class="font-weight-bold"><?php echo $game['title']?></h2>
                        <p class="text-secondary text-justify"><?php echo $game['description']?>
                        </p>
                        <p><strong>Fecha de lanzamiento: </strong><?php echo $game['formatedDate']?></p>
                        <p><strong>Plataforma: </strong><?php echo $game['platforms']?></p>
                        <p><strong>Genero: </strong><?php echo $game['genre']?></p>
                        <p><strong>Puntuacion: </strong><?php echo $game['score']?>/10</p>
                    </div>
                </div>
                <div class="col-md-5 mb-5 mt-4 pb-3">
                    <div class="custom-div-caratula">
                        <img src="assets/<?php echo $game['photo']?>" alt="Resident Evil 2" class="img-fluid rounded">
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
    <script>
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
    </script>
</body>
</html>