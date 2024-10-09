<?php

// Inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php'; // Inclui o controlador de autenticação
require 'controllers/UserController.php'; // Inclui o controlador de usuário
require 'controllers/DashboardController.php'; // Inclui o controlador de dashboard

// Cria instâncias dos controladores para utilizar seus métodos
$authController         = new AuthController(); // Instância o controlador de autenticação
$userController         = new UserController();

// Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

// Verifica a ação solicitada e chama o método apropriado do controlador
switch($action){
    case 'login':
        $authController->login();// Chama o método login do controlador de autenticação
        break;
    case 'register';
        $userController->register();
        break;

    default:
        $authController->login();
        break;

}
?>