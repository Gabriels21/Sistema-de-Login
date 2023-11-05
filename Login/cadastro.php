<?php
session_start();
include('inc/conecta.php');
include('functions/insert.php');

if (isset($_POST['email'], $_POST['senha'])) {
    cadastrarUsuario($mysqli);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastroStyle.css">
    <title>Cadastro</title>
</head>
<body>

<div class="main-login"> 

    <form method="post">
        <div class="cadastro">
            <div class="card-cadastro">

                <h1>Cadastro</h1>

                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <input class="btn btn-lg btn-login mt-5" type="submit" value="Cadastrar">
                <a href="index.php">Voltar</a></p>
                
            </div>
        </div>
    </form>
</div>

<style>
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
  color: white;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>

</body>
</html>