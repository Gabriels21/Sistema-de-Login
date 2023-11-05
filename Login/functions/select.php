<?php
    function verificaUsuario($mysqli){
        try{

        $emailU = $_POST['email'];
		$senhaU = hash('sha256', $_POST['senha']);
        
        $sql = "SELECT * FROM usuarios WHERE nm_email = ? AND ds_senha = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss", $emailU, $senhaU);
            $stmt->execute();
            $result = $stmt->get_result(); //recupera os dados do banco em forma de array
            if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$_SESSION['nm_email'] = $row["nm_email"];
					$_SESSION['id_admin'] = $row["id"];
					echo "<script>location.href='pInicial.php';</script>";
				}
			}else{
				echo '
				<script>
				alert("Usuário ou senha Incorreto(s)");
				</script>
				';
			}
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }
?>