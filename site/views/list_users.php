<?php
    session_start();

    if(isset($_SESSION['perfil'])):
?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="shortcut icon" href="./images/favicon-zen.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css"/>

</head>

<body class="<?= $_SESSION['perfil'] ?> "> <!-- Define a classe com base no perfil do usuário -->
<section id="wrapper">
    <section id="banner">
<div class="inner" bis_skin_checked="1">
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                            <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="button">Editar</a>
                        <?php endif; ?>

                        <!-- Insere botão de exclusão apenas para perfil admin -->
                        <?php if($_SESSION['perfil'] == 'admin'): ?>
                            <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="button">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
 
        <a href="index.php?action=dashboard" class="button">Voltar ao Dashboard</a>
    </div>
    </div>
                        </section>
                        </section>
</body>
 
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página</p>
<?php endif; ?>