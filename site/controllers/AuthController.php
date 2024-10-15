<?php

// Requer arquivo 'user.php' que contém o model User com as funções para manipulação de dados de usuário
require_once 'models/user.php';

class AuthController
{
    // Função responsável pelo processo de login
    public function login()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Busca o usuário pelo email
            $user = User::findByEmail($email);

            // Verifica se o usuário existe e se a senha corresponde ao hash
            if ($user && password_verify($senha, $user['senha'])) {
                session_start();

                // Armazena na sessão o ID do usuário
                $_SESSION['usuario_id'] = $user['id'];

                // Redireciona para a página index.html
                header('Location: index.html?action=index');
                exit(); // Encerra o script após o redirecionamento
            } else {
                echo "Email ou senha incorretos";
            }          
        } else {
            // Se a requisição não for POST, carrega a página de login
            include 'views/login.php';
        }
    }
}
?>
