<?php 
include '../models/users.php';

$option = filter_input(INPUT_POST, 'option', FILTER_SANITIZE_NUMBER_INT);

switch ($option) {
    case 1:
        //Recoge los datos de registro y llama a la función para crear un usuario
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        users::createUser($name, $username, $password);
        break;
    case 2:
        //Recoge los datos de login y llama a la función para iniciar sesión
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        users::logIn($username, $password);
        break;
    case 3:
        //Llama a la función para cerrar sesión
        users::logOut();
        break;
    case 4:
        //Llama a la función que carga los datos del usuario y los muestra 
        $data = users::userData();
        require '../views/user-info.php';
        break;
    case 5:
        //Recoge los datos modificados y llama a la función para modificar los datos del usuario
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        users::updateUser($name, $username, $password);
        break;
    case 6:
        //Llama a la función para eliminar la cuenta del usuario (Borra todo lo relacionado con el usuario de todas las tablas
        //ya que tenemos el ON DELETE CASCADE en las foreign keys)
        users::deleteUser();
        break;
} 