<?php include "verificar_admin.php"; ?>
<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Painel Admin - FAST DRIVE</title>
<style>
body{background:#111;color:#fff;font-family:Arial}
table{width:100%;border-collapse:collapse}
th,td{border:1px solid #333;padding:10px}
th{background:#00eaff;color:#000}
</style>
</head>
<body>

<h2>Painel Administrativo</h2>

<table>
<tr>
<th>ID</th>
<th>Cliente</th>
<th>Email</th>
<th>Telefone</th>
</tr>

<?php
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['email']}</td>
            <td>{$row['telefone']}</td>
          </tr>";
}
?>

</table>

<br>
<a href="logout.php" style="color:#00eaff;">Sair</a>

</body>
</html>
