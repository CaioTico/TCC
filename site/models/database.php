<?php
class Database{
   private static $instance = null;

   public static function getConnection(){
       if(!self::$instance){
           $host     = 'localhost';
           $db       = 'sistema_usuarios'; // Certifique-se de que este nome está correto
           $user     = 'root';
           $password = '';

           // Conexão ao banco de dados
           self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);

           // Definir o modo de erro
           self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }
       return self::$instance;
   }
}
?>
