<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se </title>
    <link rel="stylesheet" type="text/css" href=".//Login_v1/css/main.css">
    <link rel="stylesheet" type="text/css" href=".//Login_v1/css/util.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="caixa-cadastro">
                <span class="login100-form-title">
                    Cadastro de Membro
                </span>
                <div class="centro-form">
                    <form class="login100-form validate-form" action="index.php?action=register" method="post">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="nome" id="nome" placeholder="Nome" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email" id="email" placeholder="Email" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="senha" id="senha" placeholder="Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <label for="perfil">Perfil:</label>
                            <select name="perfil" id="perfil">
                                <option value="admin">Admin</option>
                                <option value="colaborador">Usuario</option>
                            </select>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>





                        <button type="submit" class="login100-form-btn">
                            Cadastrar
                        </button>
                    </form>
                    <a href="index.php?action=login">Voltar ao Login</a>
                    <div>
                    </div>
                </div>
            </div>
</body>

</html>