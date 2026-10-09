<?php
// Inicia ou retoma a sessão do PHP para permitir armazenar dados do usuário autenticado
session_start();

// Importa o arquivo de conexão com o banco de dados MySQL
require_once "connection.php";

// Verifica se o formulário foi enviado através do método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe e limpa espaços vazios no início/fim do e-mail digitado
    $email = trim($_POST['email']);
    // Recebe a senha digitada no formulário
    $senha_digitada = $_POST['password'];

    // Monta a consulta SQL para buscar a conta correspondente ao e-mail informado
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    // Executa a consulta no banco de dados através da conexão MySQLi
    $resultado = $conexao->query($sql);

    // Verifica se a consulta retornou algum registro (se o e-mail existe na tabela)
    if ($resultado && $resultado->num_rows > 0) {
        // Converte o resultado retornado pelo banco em um array associativo
        $usuario = $resultado->fetch_assoc();
        
        // Compara a senha digitada pelo usuário com o hash criptografado salvo no banco
        if (password_verify($senha_digitada, $usuario['senha'])) {
            // Se a senha for correta, grava as informações do usuário nas variáveis globais de sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            // Redireciona a navegação para a área restrita do sistema
            header("Location: painel.php");
            exit(); // Interrompe o script para garantir o redirecionamento
        } else {
            // Se a senha estiver errada, exibe alerta via JavaScript e retorna para a tela de login
            echo "<script>
                    alert('Senha incorreta!');
                    window.location.href = 'login.html';
                  </script>";
        }
    } else {
        // Se o e-mail não for encontrado no banco de dados, exibe alerta e retorna para o login
        echo "<script>
                alert('E-mail não encontrado!');
                window.location.href = 'login.html';
              </script>";
    }
} else {
    // Se a página for acessada diretamente sem passar pelo formulário, redireciona para a tela de login
    header("Location: login.html");
    exit();
}
?>