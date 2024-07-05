<?php
// Configurações do banco de dados
$name = "localhost";
$username = "root";
$password = "";
$dbname = "formulario"; // Substitua pelo nome do seu banco de dados

// Criação da conexão
$conexao = mysqli_connect($name, $username, $password, $dbname);

// Verificação da conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);

    

      
    

      
    
}
?>