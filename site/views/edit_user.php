<!DOCTYPE html>
<html lang="pt-br">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Usuário</title>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="shortcut icon" href="./images/favicon-zen.ico" type="image/x-icon">
</head>

 
<body class="edit-body">
<section id="wrapper">
    <section id="banner">
<div class="inner" bis_skin_checked="1">
<div class="edit-container">
<h2>Editar Usuário</h2>
<form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required><br>
 
            <label for="email">Email:</label>
<input type="email" name="email" id="email" value="<?= $user['email']?>" required><br>
 
            <label for="perfil">Perfil:</label>
<select name="perfil" id="perfil" class="button">
  <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?> style="color: #1a0c74; background: white;">Admin</option>
  <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?> style="color: #1a0c74; background: white;">Usuário</option>
</select>

<br><br>
            <button type="submit" class="button">Salvar</button>
</form>
<a href="index.php?action=list" class="button">Voltar para Lista de Usuários</a>
</div>
</div>
</section>
</section>
</body>
</html>