<?php
    function cadastrarUsuario($mysqli){
        try{
        $stmt = $mysqli->prepare("INSERT INTO usuarios (nm_email, ds_senha ) VALUES (?, ?)");
            $emailU = $_POST['email'];
            $senhaU = hash('sha256', $_POST['senha']);
            $stmt->bind_param("ss", $emailU, $senhaU);
            $stmt->execute();
            echo "<script>location.href='index.php';</script>";
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }

?>