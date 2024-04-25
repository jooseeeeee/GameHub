<?php
include_once "../conn/bd.php";
class library {
    //Obtener los juegos de la biblioteca del usuario
    public static function getUserGames(){

        global $conn;

        include_once "../security/security.php";
        $id = $_SESSION['id'];
        $filt = $conn->prepare("SELECT games.id, games.title, games.photo FROM games INNER JOIN users_games ON games.id = users_games.game_id WHERE users_games.user_id = ?");
        $filt->bind_param('i', $id);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }
        return $games;
    }

    //Obtener los juegos de la biblioteca del usuario para mostrar segun el genero recibido
    public static function getUserGamesByGenre($genre)
    {
        global $conn;

        include_once "../security/security.php";
        $id = $_SESSION['id'];
        $filt = $conn->prepare("SELECT games.id, games.title, games.photo FROM games INNER JOIN users_games ON games.id = users_games.game_id WHERE users_games.user_id = ? AND games.genre = ?");
        $filt->bind_param('is', $id, $genre);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }
        return $games;
    }

    //Eliminar un juego de la biblioteca del usuario
    public static function deleteGame($gameID){

        global $conn;

        include_once "../security/security.php";
        $userID = $_SESSION['id'];
        $filt = $conn->prepare("DELETE FROM users_games WHERE user_id = ? AND game_id = ?");
        $filt->bind_param('ii', $userID, $gameID);
        $filt->execute();
        $filt->close();
        echo "Juego eliminado de tu biblioteca.";
    }
}