<?php

class DashboardController
{
    public function index()
    {
        // Inicia a sessão para verificar se o usuário está autenticado
        session_start();
        
        // Verifica se a sessão está ativa
        if (!isset($_SESSION['usuario_id'])) {
            // Se não estiver autenticado, redireciona para o login
            header('Location: index.php?action=login');
            exit; // Garante que o script será interrompido após o redirecionamento
        }

        // Passa a informação do perfil do usuário para a view
        $perfil = $_SESSION['perfil'];

        // Inclui a página do dashboard, passando o perfil do usuário
        include 'index.html';
    }
}
?>