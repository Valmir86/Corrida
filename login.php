<?php
session_start();
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $user = $result->fetch_assoc();

    if(password_verify($senha, $user['senha'])){

        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['tipo'] = $user['tipo'];

        if($user['tipo'] == "admin"){
            header("Location: admin.php");
        } else {
            header("Location: index.html");
        }

    } else {
        echo "Senha incorreta.";
    }

} else {
    echo "Usuário não encontrado.";
}
?>
