<?php
include_once "../conn/bd.php";
class users
{
    //Cerrar sesión
    public static function logOut()
    {
        session_start();
        session_destroy();
        exit();
    }

    //Iniciar sesión
    public static function logIn($username, $password)
    {
        global $conn;

        if (empty($username) || empty($password)) {
            echo "Por favor rellena todos los campos.";
            exit();
        }

        $filt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $filt->bind_param('ss', $username, $password);
        $filt->execute();
        $res = $filt->get_result();
        $filt->close();

        if ($row = mysqli_fetch_assoc($res)) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['sesion'] = 1;
            echo "true";
            exit();

        } else {
            echo "Usuario o contraseña incorrectos.";
            exit();
        }
    }

    //Registrar usuario
    public static function createUser($name, $username, $password)
    {
        global $conn;

        if (!empty($name) && !empty($username) && !empty($password)) {

            if (strlen($name) > 40) {
                echo "El nombre no puede tener más de 40 caracteres.";
                exit();
            }
            if (strlen($username) > 16) {
                echo "El nombre de usuario no puede tener más de 16 caracteres.";
                exit();
            }
            if (strlen($password) > 15) {
                echo "La contraseña no puede tener más de 15 caracteres.";
                exit();
            }

            $filt = $conn->prepare("SELECT * FROM users WHERE username = ?");
            $filt->bind_param('s', $username);
            $filt->execute();
            $checkResult = $filt->get_result();
            $filt->close();

            if ($checkResult->num_rows > 0) {
                echo "Ese nombre de usuario no está disponible.";
            } else {
                $filt = $conn->prepare("INSERT into users (name, username, password) VALUES (?,?,?)");
                $filt->bind_param('sss', $name, $username, $password);
                $filt->execute();
                $filt->close();

                echo "true";
            }

        } else {
            echo "Por favor rellena todos los campos.";
        }
    }

    //Obtener datos del usuario para mostrar en la vista de datos del usuario
    public static function userData()
    {

        global $conn;

        session_start();
        $id = $_SESSION['id'];
        $filt = $conn->prepare("SELECT name, username, password FROM users WHERE id = ?");
        $filt->bind_param('i', $id);
        $filt->execute();
        $res = $filt->get_result();
        $filt->close();

        $row = mysqli_fetch_assoc($res);

        $userData = $row;

        return $userData;
    }

    //Modificar datos del usuario
    public static function updateUser($name, $username, $password)
    {

        global $conn;

        session_start();
        $id = $_SESSION['id'];

        if (empty($name) || empty($username) || empty($password)) {
            echo "Porfavor rellena todos los campos.";
        } else {
            if (strlen($name) > 40) {
                echo "El nombre no puede tener más de 40 caracteres.";
                exit();
            }
            if (strlen($username) > 16) {
                echo "El nombre de usuario no puede tener más de 16 caracteres.";
                exit();
            }
            if (strlen($password) > 15) {
                echo "La contraseña no puede tener más de 15 caracteres.";
                exit();
            }
            $filt = $conn->prepare("SELECT * FROM users WHERE username = ? AND id != ?");
            $filt->bind_param('si', $username, $id);
            $filt->execute();
            $checkResult = $filt->get_result();
            $filt->close();

            if ($checkResult->num_rows > 0) {
                echo "Ese nombre de usuario no está disponible.";
            } else {
                $filt = $conn->prepare("UPDATE users SET name = ?, username = ?, password = ? WHERE id = ?");
                $filt->bind_param('sssi', $name, $username, $password, $id);
                $filt->execute();
                $filt->close();

                echo "Datos modificados correctamente.";
            }
        }
    }

    //Eliminar usuario
    public static function deleteUser()
    {

        global $conn;

        session_start();
        $id = $_SESSION['id'];
        $filt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $filt->bind_param('i', $id);
        $filt->execute();
        $filt->close();
        session_destroy();
        exit();
    }

}