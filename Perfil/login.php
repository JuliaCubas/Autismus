
<?php

session_start();


if(isset($_SESSION["usuarioEmail"]) || isset($_SESSION["usuarioSenha"])){
		header("Location: perfil.php");
		exit;
		}else{

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/62e43a72a9.js"></script>
</head>
<body>

<form action="../autismos.php">
<button type="submit"><i   class="fa fa-arrow-left" aria-hidden="true"></i></button>
</form>
    <div class="contact-form">
        <img src="imagens/1.jpg" class="avatar">
        <h2> Login </h2>
       <form method="POST" action="validalogin.php" name="cadastro">
		</p> Email </p>			
		<input type="email" placeholder="email" name="email" id="email_func" required>
						
	    </p> Password </p>
	    <input type="password" placeholder="senha" name="senha" id="senha_func" required>
	      
					<div class="inputBox">
						<input type="submit" value="Logar" id="logar" name="logar">
					</div>
			</form>
			<div class="text-center">
						<span class="txt1">
							Não tem uma conta?
						</span>

						<a href="cadastrar.php" class="txt2 hov1">
							Cadastre-se
						</a>
        </form>
			
    </div>
						
</div>
</body>
</html>

<?php }?>