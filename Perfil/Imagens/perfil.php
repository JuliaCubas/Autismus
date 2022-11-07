<?php
include_once 'conexao.php';
session_start();

	  $nome=$_SESSION['usuarioNome'];
	$email=$_SESSION["usuarioEmail"];
	$senha=$_SESSION["usuarioSenha"];
if(!isset($email) || !isset($senha)){
		header("Location: login.php");
		exit;
		}else{



 ?>
<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="estiloperfil1.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">

<body>
  <?php
  ?>


<div class="content">
<div class="borda"></div>
<div class="img">
	<?php
include_once 'conexao.php';

$sql = mysqli_query($connect,"SELECT foto FROM login WHERE email='$email'");

while($exibe = mysqli_fetch_assoc($sql)){

	echo "<img src='../arquivos/".$exibe['foto']."'width='300px' height='300px' border-radius:'50%' "."' alt='Foto de exibição' /><br />";
}
?>
  <div class="usuario">
  <h1> Olá <?php echo $nome;?> !</h1>
  </div></div>

</div>

<div class="img1"><a href="../index/index.php"><button class="botaoimg1"><input type=image src="imagem/home.png" height="40" width="40"></a></div>
<div class="img2"><button class="botaoimg" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><input type=image src="imagem/config.png" width="60" height="35"></div>
<div class="img3"><a  href="sair.php"><button class="botaoimg2"><input type=image src="imagem/exit.png" height="40" width="40"></a></div>
<div id="id01" class="modal">

  <form class="modal-content animate" enctype="multipart/form-data" action="atualizar.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<?php
		include_once 'conexao.php';

		$sql = mysqli_query($connect,"SELECT foto FROM login WHERE email='$email'");

		while($exibe = mysqli_fetch_assoc($sql)){
			echo "<img src='../arquivos/".$exibe['foto']."'width='200px' height='200px'"."' alt='Foto de exibição' /><br />";
		}
		?>
    </div>

    <div class="container">
      <label for="nome"><b>Nome novo para usuário</b></label>
      <input type="text" placeholder="Usuário" name="nome" required>
			Foto de exibição:<br />
			<input type="file" name="foto" value="foto" required /><br /><br />
      <button type="submit" name="atualizar">Mudar</button>
	  </form>
    </div>
</div>
					<script>
					var modal = document.getElementById('id01');
					window.onclick = function(event) {
					  if (event.target == modal) {
					    modal.style.display = "none";
					  }
					}
					</script>
</body>
</html>
<?php }?>
