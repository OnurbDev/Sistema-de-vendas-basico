<?php 
session_start();
require "conexao.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios WHERE email_usuario='$email' AND senha_usuario='$senha'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $professor = $result->fetch_assoc();
        $_SESSION['professor_id'] = $professor['id_professores'];
        $_SESSION['professor_nome'] = $professor['nome'];

        if ($professor['isadm'] == 1) {
            $_SESSION['isadm'] = true;
            echo "bem vindo administrador";
            header("Location: tela_adm.php");

        } else {
            $_SESSION['isadm'] = false;
            header("Location: tela_usuarios.php");
        }
    } else {
        header("Location: index.php");
    }
}
?>