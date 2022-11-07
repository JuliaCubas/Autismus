<?php

    include_once("conexao.php");

    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $senha= md5($_POST['senha']);


	$pegaEmail = mysqli_query($connect, "SELECT * FROM usuario WHERE email = '$email'");

	if(mysqli_num_rows($pegaEmail) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este email ja esta cadastrado em nossos registros');window.location.href='cadastra.php'</script>";
	}
		else{



    $result_usuario = "INSERT INTO login(usuario, email, senha, foto) VALUES ('$nome','$email','$senha','1.jpg')";
    $resultado_usuario = mysqli_query($connect, $result_usuario);

    if(mysqli_affected_rows($connect) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='login.php'</script>";
                ;
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este usuario');window.location.href='cadastrar.php'</script>"
                ;
            }
	}

?>
