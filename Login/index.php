<?php
session_start();
include('inc/conecta.php');
include('functions/select.php');

if (isset($_POST['email'], $_POST['senha'])) {
   verificaUsuario($mysqli);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

    <div class="main-login"> 

        <div class="left-login">
            <h1>Fazer Login <br>E entrar para nossa família</h1>
            <img src="computador.svg" class="left-login-image" alt="computador">
        </div>

      <form  method="post">
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <button class="btn-login" type="submit">Login</button>
                <p style="color:#77ffc0">Não possui conta? <a href="cadastro.php">cadastre-se</a></p>
            </div>
        </div>
      </form>
      
    </div>

</body>
</html>

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