<header class="fixed-top mb-5">
    <nav class="navbar navbar-expand-lg color">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.php">
                <img src="assets/logo/GameHub.png" alt="GameHub" class="img-logo mr-2" id="logo">
            </a>
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
<div class="container-fluid foto-details pb-5 mt-5">
    <div class="container bk-color-details rounded">
        <div class="row">
            <div class="mt-5">
            </div>

            <div class="col-md-6 mb-4 pt-5">
                <div class="custom-div-infoJuego-details ml-4">
                    <h2 class="font-weight-bold"><?php echo $game['title'] ?></h2>
                    <p class="text-secondary text-justify"><?php echo $game['description'] ?>
                    </p>
                    <p><strong>Fecha de lanzamiento: </strong><?php echo $game['formatedDate'] ?></p>
                    <p><strong>Plataforma: </strong><?php echo $game['platform'] ?></p>
                    <p><strong>Genero: </strong><?php echo $game['genre'] ?></p>
                    <p><strong>Puntuacion: </strong><?php echo $game['score'] ?>/10</p>
                </div>
            </div>
            <div class="col-md-5 mb-5 mt-4 pb-3">
                <div class="custom-div-caratula-details">
                    <img src="assets/<?php echo $game['photo'] ?>" alt="Resident Evil 2" class="img-fluid rounded">
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

<script>
    $(document).ready(function () {
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