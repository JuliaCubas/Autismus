<?php
session_start();
    include_once("conexao.php");
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($connect, $_POST['email']);
        $senha = mysqli_real_escape_string($connect, $_POST['senha']);
        $senha = md5($_POST['senha']);
        $result_usuario = "SELECT * FROM login WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($connect, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){

	    $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['usuario'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
	    $_SESSION['usuarioSenha'] = $resultado['senha'];

            header("location: perfil.php");
        }else{
            $_SESSION['loginErro'] = "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos')</script>";
            header("location: login.php");
        }
    }else{
        $_SESSION['loginErro'] = "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos')</script>";
        header("location: login.php");
    }
