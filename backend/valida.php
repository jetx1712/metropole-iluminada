<?php
require('conexao.php');
// Credenciais de login recebidas do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: edicao.php"); 
} else {
    echo "<script>alert('Usuário ou senha incorretos. Por favor, tente novamente.'); window.location.href = 'login.php';</script>";
    exit; 
}
$conn->close();

