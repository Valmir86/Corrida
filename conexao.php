<?php
$host = "sql303.infinityfree.com";
$user = "if0_41240198";
$pass = "De86107725";
$db   = "if0_41240198_fastdrive";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
