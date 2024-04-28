<?php
include '../models/library-games.php';
include '../security/security.php';

$option = filter_input(INPUT_POST, 'option', FILTER_SANITIZE_NUMBER_INT);

switch ($option) {
    //Cargar los juegos de la biblioteca del usuario, añadimos el js para que funcione el botón de borrar ya que estamos cargando los juegos.
    case 1:
        $games = library::getUserGames();
        foreach ($games as $game) {
            require '../views/library-games.php';
        }
        ?>
        <script>
            $(document).ready(function () {
                $(".btn-delete").click(function () {
                    let id = $(this).attr("gameID");
                    let option = 3;
                    $.ajax({
                        url: "backoffice/controllers/library-controller.php",
                        type: "POST",
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                            $.ajax({
                                url: "backoffice/controllers/library-controller.php",
                                type: "POST",
                                data: {
                                    option: 1
                                },
                                success: function (a) {
                                    $("#userGames").html(a);
                                },
                            });
                        },
                    });
                });

                $('.btn-custom').click(function () {
                    option = 6;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: { option: option, id: id },
                        success: function (a) {
                            $("title").text("Detalles");
                            $('html').scrollTop(0);
                            $('body').html(a);
                        }
                    });
                });

            });
        </script>
        <?php
        break;
    case 2:
        //Filtrar juegos por género, añadimos el js para que funcione el botón de borrar ya que recargamos esa vista
        $genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
        $games = library::getUserGamesByGenre($genre);
        foreach ($games as $game) {
            require '../views/library-games.php';
        }
        ?>
        <script>
            $(document).ready(function () {
                // Funcion que manda el id del juego a borrar y recarga el div
                $(".btn-delete").click(function () {
                    let id = $(this).attr("gameID");
                    let option = 3;
                    $.ajax({
                        url: "backoffice/controllers/library-controller.php",
                        type: "POST",
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                            $.ajax({
                                url: "backoffice/controllers/library-controller.php",
                                type: "POST",
                                data: {
                                    option: 1
                                },
                                success: function (a) {
                                    $("#userGames").html(a);
                                },
                            });
                        },
                    });
                });

                //Función para cargar la vista de detalles del juego
                $('.btn-custom').click(function () {
                    option = 6;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: { option: option, id: id },
                        success: function (a) {
                            $("title").text("Detalles");
                            $('html').scrollTop(0);
                            $('body').html(a);
                        }
                    });
                });
            });
        </script>
        <?php
        break;
    case 3:
        //Borrar juego de la biblioteca
        $gameID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        library::deleteGame($gameID);
        break;
}