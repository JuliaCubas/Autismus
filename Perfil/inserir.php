<?php
include_once 'conexao.php';
session_start();

	$_SESSION["usuarioNome"];
	$email1=$_SESSION["usuarioEmail"];
	$_SESSION["usuarioSenha"];
        $_SESSION['usuarioFoto'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
		header("Location: login.php");
		exit;
		}else{



 ?>
<html>
<head>
<title>Perfil</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome"]; echo "</span>";?>

<?php
include_once 'conexao.php';

$sql = mysqli_query($connect,"SELECT foto FROM usuarios WHERE email='$email1'");

// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
	// Exibimos a foto
	echo "<img src='imagem/1.jpg".$usuario->foto."' alt='Foto de exibição' /><br />";

}
?>

<form action="atualizar.php"  >
<input type="submit" value="Atualizar" />
</form>
</fieldset>
<br>
</div>
<form action="sair.php">
<input type="submit" value="Deslogar" name="deslogar" class="deslogar">
</form>
</body>
</html>
<?php }?>
