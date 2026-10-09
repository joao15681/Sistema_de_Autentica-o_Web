<?php
// Inicia ou restaura a sessão ativa para verificar se o usuário está logado
session_start();

// Verifica se a variável de sessão 'usuario_id' NÃO existe (ou seja, usuário não autenticado)
if (!isset($_SESSION['usuario_id'])) {
    // Redireciona imediatamente de volta para a página de login
    header("Location: login.html");
    exit(); // Interrompe o script para impedir o carregamento do HTML protegido
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <!-- Estilização interna simplificada para a página restrita -->
    <style>
        body { background-color: #121212; color: #fff; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .box { background: #0d0d0d; padding: 40px; border-radius: 12px; text-align: center; border: 1px solid #222; }
        h1 { color: #ffc107; }
        a { color: #ff4d4d; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <!-- Card central do painel exibindo o nome do usuário armazenado na sessão -->
    <div class="box">
        <h1>Bem-vindo, <?= $_SESSION['usuario_nome'] ?>! 🎉</h1>
        <p>Login efetuado com sucesso no sistema.</p>
        <br>
        <!-- Link de encerramento da sessão que chama o script logout.php -->
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>