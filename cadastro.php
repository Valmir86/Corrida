<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome,email,telefone,senha)
        VALUES ('$nome','$email','$telefone','$senha')";

if($conn->query($sql)){
    echo "Cadastro realizado com sucesso!";
}else{
    echo "Erro ao cadastrar.";
}
?>
