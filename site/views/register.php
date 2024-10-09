<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se </title>
    <style>
        body {
            padding: 30px;
            background-image: linear-gradient(90deg, purple, rgb(255, 255, 255));
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            align-items: center;
            justify-content: center;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        main {
            width: 35vw;
            height: 35vh;
            justify-content: center;
            align-items: center;
            align-items: center;
            justify-content: center;
        }

        form {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border: solid pink 1px;
            padding: 20px;
            border-radius: 0.7rem;
            padding-right: 10%;
            align-items: center;
            justify-content: center;
            color: white;
        }

        form input,
        form select {
            width: 100%;
            /* Full width */
            padding: 10px;
            /* Padding for comfort */
            margin-bottom: 15px;
            /* Space between fields */
            border-radius: 0.5rem;
            /* Rounded corners */
            border: 1px solid rgba(0, 0, 0, 0.3);
            /* Subtle border */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            /* Soft shadow */
        }

        form input:hover {
            transition: .5 s;
            transform: scale(1.1);
        }

        form button {
            margin-top: 20px;
            border-radius: 0.2rem;
            border: none;
            outline: none;
            border-radius: 0.2rem;
            border: none;
            box-shadow: 3px 3px 8px;
            padding: 10px;
            padding-left: 30px;
            padding-right: 30px;
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: white;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            text-shadow: 0px 0px 5px rgb(255, 0, 128);
        }

        form button:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        form button:active {
            color: pink;
        }

        form button:active:after {
            background: transparent;
        }

        form button:hover:before {
            opacity: 1;
        }

        form button:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: pink;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        h2 {
            color: white;
            text-shadow: 0 0 20px black;
        }

        a {
            text-decoration: none;
            color: pink;
        }

        a:hover {
            text-decoration: underline;
        }

        @media only screen and (max-width: 1090px) {

            main,
            form,
            button {
                margin-left: 50vw;
                margin-right: 50vw;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">

            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao Login</a>
    </div>
</body>

</html>