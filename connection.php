<?php
// Define o endereço do servidor de base de dados (localhost indica que o MySQL está a rodar na mesma máquina que o PHP)
$host = "localhost";

// Define o nome do utilizador do MySQL (por padrão, no XAMPP, o utilizador administrador é "root")
$usuario = "root";

// Define a palavra-passe do utilizador do MySQL (no XAMPP padrão, a palavra-passe do root vem em branco)
$senha = "";

// Define o nome da base de dados que criaste no phpMyAdmin e onde estão as tuas tabelas
$banco = "system_login";

// Cria uma nova instância da classe 'mysqli' para abrir a conexão com a base de dados usando as credenciais acima
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se ocorreu algum erro durante a tentativa de conexão com a base de dados
if ($conexao->connect_error) {
    // Se houver erro, a função die() interrompe imediatamente a execução do script e exibe a mensagem de erro detalhada
    die("Falha na conexão com a base de dados: " . $conexao->connect_error);
}
?>