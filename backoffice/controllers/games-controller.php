<?php
include '../models/games.php';
include '../security/security.php';

$option = filter_input(INPUT_POST, 'option', FILTER_SANITIZE_NUMBER_INT);

switch ($option) {
    case 1:
        //LLama a la función que obtiene los juegos recomendados y hago un foreach para mostrar cada uno
        $RecommendedGames = Games::getRecommendedGames();
        foreach ($RecommendedGames as $game) {
            require '../views/recommended-games.php';
        }
        break;
    case 2:
        //LLama a la función que obtiene los juegos más recientes y hago un foreach para mostrar cada uno
        $LatestGames = Games::getLatestGames();
        foreach ($LatestGames as $game) {
            require '../views/latest-games.php';
        }
        break;
    case 3:
        //LLama a la función que obtiene los juegos más valorados y hago un foreach para mostrar cada uno
        $MostRatedGames = Games::getMostRatedGames();
        foreach ($MostRatedGames as $game) {
            require '../views/most-rated-games.php';
        }
        break;
    case 4:
        //LLama a la función que obtiene todos los juegos y hago un foreach para mostrar cada uno
        $AllGames = Games::getAllGames();
        foreach ($AllGames as $game) {
            require '../views/all-games.php';
        }
        //Cierro php y cargo el script para que funcionen los botones de añadir, favoritos y detalles
        ?>
        <script>
            $(document).ready(function () {
                $('.btn-custom').click(function () {
                    option = 6;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: { option: option, id: id },
                        success: function (a) {
                            $('html').scrollTop(0);
                            $('html').html(a);
                        }
                    });
                });
                $(".btn-add").click(function () {
                    option = 7;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                        }
                    });
                });
                $(".btn-fav").click(function () {
                    option = 8;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                        }
                    });
                });
            });
        </script>
        <?php
        break;
    case 5:
        //LLama a la función que obtiene los juegos por género y hago un foreach para mostrar cada uno
        $genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
        $GamesByGenre = Games::getGamesByGenre($genre);
        foreach ($GamesByGenre as $game) {
            require '../views/games-by-genre.php';
        }
        ?>
        <script>
            $(document).ready(function () {
                $('.btn-custom').click(function () {
                    option = 6;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: { option: option, id: id },
                        success: function (a) {
                            $('html').scrollTop(0);
                            $('html').html(a);
                        }
                    });
                });
                $(".btn-add").click(function () {
                    option = 7;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                        }
                    });
                });
                $(".btn-fav").click(function () {
                    option = 8;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                        }
                    });
                });
            });
        </script>
        <?php
        break;
    case 6:
        //LLama a la función que obtiene los detalles de un juego y carga la vista con los detalles de este
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $game = Games::getGameDetails($id);
        require '../views/details.php';
        break;
    case 7:
        //LLama a la función que añade un juego a la biblioteca del usuario
        $gameID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        Games::addGame($gameID);
        break;
    case 8:
        //LLama a la función que añade un juego a favoritos del usuario
        $gameID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        Games::fav($gameID);
        break;
    case 9:
        //LLama a la función que elimina un juego de favoritos del usuario
        $gameID = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        Games::unfav($gameID);
        break;
    case 10:
        //LLama a la función que muestra los juegos favoritos del usuario y hago un foreach para mostrar cada uno
        $favGames = Games::showUserFavs();
        foreach ($favGames as $game) {
            require '../views/fav-games.php';
        }
        ?>
        <script>
            $(document).ready(function () {
                $(".btn-unfav").click(function () {
                    option = 9;
                    var id = $(this).attr('gameID');
                    $.ajax({
                        type: 'POST',
                        url: 'backoffice/controllers/games-controller.php',
                        data: {
                            option: option,
                            id: id
                        },
                        success: function (a) {
                            $('.toast-body').html(a);
                            $('.toast').toast('show');
                            let option = 10;
                            $.ajax({
                                url: 'backoffice/controllers/games-controller.php',
                                type: 'POST',
                                data: { option },
                                success: function (a) {
                                    $('#favGames').html(a);
                                }
                            });
                        }
                    });
                });
            });
            <?php
            break;
}