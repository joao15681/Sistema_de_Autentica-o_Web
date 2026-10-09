<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['name']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['password']);

    // Criptografa a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se o e-mail já existe
    $check_email = "SELECT id FROM usuarios WHERE email = '$email'";
    $res = $conexao->query($check_email);

    if ($res && $res->num_rows > 0) {
        echo "<script>
                alert('Este e-mail já está registrado!');
                window.location.href = 'sign.html';
              </script>";
        exit();
    }

    // Insere o utilizador na tabela 'usuarios'
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>
                alert('Conta criada com sucesso!');
                window.location.href = 'login.html';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao registrar utilizador.');
                window.location.href = 'sign.html';
              </script>";
    }
} else {
    header("Location: sign.html");
    exit();
}
?>