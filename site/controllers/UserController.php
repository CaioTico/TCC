
<?php
 
class UserController{
    public function register(){
        //Verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Coleta os dados pelo formulário e organiza em um array
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                //Criptografa a senha
            ];
            //Chama o método create do model User para criar o novo usuário no BD
            
            User::create($data);
            header('Location: index.php');
        } else{
            // Se a requisição não for POST (por exemplo, GET), carrega a página de registro
            include 'views/register.php';

            
        } 
    }
}
?>