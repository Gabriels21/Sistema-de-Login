<?php
session_start();
include('inc/conecta.php');
include('functions/select.php');

if (!isset($_SESSION['nm_email'])) {
    verificaUsuario($mysqli);
    header('Location: index.php');
 }

echo "<h1>Bem vindo<h1>" . $_SESSION['nm_email'];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
<body>

<br>
<br>
<a href="logout.php">
    <button type="button" class="btn btn-danger">Deslogar</button>
</a>
</body>
</html>