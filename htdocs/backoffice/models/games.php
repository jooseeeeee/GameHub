<?php
include_once '../conn/bd.php';
class Games
{
    //Obtener los juegos recomendados por nosotros
    public static function getRecommendedGames()
    {
        global $conn;

        include_once '../security/security.php';
        $filt = $conn->prepare("SELECT id, title, photo FROM games where recommended = 1 LIMIT 12");
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();
        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }

        return $games;
    }

    //Obtener los juegos mas recientes (ultimos laznamientos)
    public static function getLatestGames()
    {
        global $conn;

        include_once '../security/security.php';
        $filt = $conn->prepare("SELECT id, title, photo FROM games order by DATE desc limit 12");
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }

        return $games;
    }

    //Obtener los juegos mas valorados
    public static function getMostRatedGames()
    {
        global $conn;

        include_once '../security/security.php';
        $filt = $conn->prepare("SELECT id, title, photo FROM games order by score desc limit 12");
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }

        return $games;
    }

    //Obtener todos los juegos
    public static function getAllGames()
    {
        global $conn;

        include_once '../security/security.php';
        $filt = $conn->prepare("SELECT id, title, photo FROM games");
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }

        return $games;
    }

    //Obtener los juegos por genero recibido
    public static function getGamesByGenre($genre)
    {
        global $conn;

        include_once '../security/security.php';
        $filt = $conn->prepare("SELECT id, title, photo FROM games where genre = ?");
        $filt->bind_param("s", $genre);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }

        return $games;
    }

    //Obtener los detalles del juego recibido (id)
    public static function getGameDetails($id){

        global $conn;

        include_once '../security/security.php';
        $filt = $conn->prepare("SELECT *, DATE_FORMAT(date, '%d-%m-%Y') AS formatedDate FROM games WHERE id = ?");
        $filt->bind_param("i", $id);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $game = $result->fetch_assoc();

        return $game;
    }

    //Añadir un juego a la biblioteca del usuario
    public static function addGame($gameID){

        global $conn;

        include_once '../security/security.php';
        $userID = $_SESSION['id'];
        $filt = $conn->prepare("SELECT * FROM users_games WHERE user_id = ? AND game_id = ?");
        
        $filt->bind_param("ii", $userID, $gameID);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        if ($result->num_rows > 0) {
            echo "El juego ya está en tu biblioteca.";
            $result->close();
            return;
        } else {
            $filt = $conn->prepare("INSERT INTO users_games (user_id, game_id) VALUES (?, ?)");
            $filt->bind_param("ii", $userID, $gameID);
            $filt->execute();
            $filt->close();
            echo "Juego añadido a tu biblioteca.";
        }

    }

    //Añadir el juego a la lista de favoritos del usuario
    public static function fav($gameID){

        global $conn;

        include_once '../security/security.php';
        
        $userID = $_SESSION['id'];

        $filt = $conn->prepare("SELECT * FROM user_favorite_games WHERE user_id = ? AND game_id = ?");
        $filt->bind_param("ii", $userID, $gameID);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        
        if ($result->num_rows > 0) {
            echo "El juego ya está en tus favoritos.";
            $result->close();
            return;
        } else {
            $filt = $conn->prepare("INSERT INTO user_favorite_games (user_id, game_id) VALUES (?, ?)");
            $filt->bind_param("ii", $userID, $gameID);
            $filt->execute();
            $filt->close();
            echo "Juego añadido a favoritos.";
        }
    }

    //Eliminar el juego de la lista de favoritos del usuario
    public static function unfav($gameID){

        global $conn;

        include_once '../security/security.php';
        
        $userID = $_SESSION['id'];

        $filt = $conn->prepare("DELETE FROM user_favorite_games WHERE user_id = ? AND game_id = ?");
        $filt->bind_param("ii", $userID, $gameID);
        $filt->execute();
        $filt->close();
        echo "El juego ha sido eliminado de tu lista de favoritos.";
    }

    //Obtener los juegos favoritos del usuario
    public static function showUserFavs(){

        global $conn;

        include_once '../security/security.php';
        
        $userID = $_SESSION['id'];

        $filt = $conn->prepare("SELECT games.id, games.title, games.photo FROM games INNER JOIN user_favorite_games ON games.id = user_favorite_games.game_id WHERE user_favorite_games.user_id = ?");
        $filt->bind_param("i", $userID);
        $filt->execute();
        $result = $filt->get_result();
        $filt->close();
        $games = array();

        while ($row = $result->fetch_assoc()) {
            array_push($games, $row);
        }

        return $games;
    }
    
}

