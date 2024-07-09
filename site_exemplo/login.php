<?php 
session_start();
require "conexao.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios WHERE email_usuario='$email' AND senha_usuario='$senha'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome_usuario'] = $usuario['nome_usuário'];

        if ($usuario['isadm'] == 1) {
            $_SESSION['isadm'] = true;
            echo "Bem-vindo administrador";
            header("refresh:2;Location:index.php");

        } else {
            $_SESSION['isadm'] = false;
            echo "Bem-vindo";
            header("refresh:2;Location:tela_usuarios.php");
        }
    } else {
        header("Location: index.php");
    }
}
?>