<?php
// Inicia/restaura a sessão atual para que o PHP saiba qual sessão destruir
session_start();

// Destrói completamente todos os dados gravados na sessão atual do servidor
session_destroy();

// Redireciona o usuário deslogado de volta para a tela inicial de login
header("Location: login.html");
exit(); // Garante o término imediato da execução do código
?>