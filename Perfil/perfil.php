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
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" ></script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
<script language="javascript" type="text/javascript">
$(document).ready(function(){
$(".menu-button").click(function(){
$(".menu-bar").toggleClass( "open" );
});
});
</script>
<?php
  ?>
<body>

	


<div class="avatar" >
<?php
include_once 'conexao.php';

$sql = mysqli_query($connect,"SELECT foto FROM login WHERE email='$email'");

while($exibe = mysqli_fetch_assoc($sql)){

	echo "<img src='../arquivos/".$exibe['foto']."'width='300px' height='300px' border-radius:'50%' "."' alt='Foto de exibição' /><br />";
}
?>
</div>


  <div class="usuario">
  <h1><?php echo $nome;?></h1>
  </div>




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
      <label for="nome">Nome novo para usuário: </label>
      <input type="text" placeholder="Usuário" name="nome" required>
	  	  <br><br>
			Foto de exibição:
			<input type="file" name="foto" value="foto" required /><br><br>
			
      <a  type="submit" name="atualizar" class="btn btn-primary btn-lg">Mudar</a>
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

<div class="logo">
<img src="../imagens/Logo4.png"/> 
</div>
					
<ul class="menu">


      <li title="Menu"><a  class=" home menu-button">Menu</a></li>
	   <li title="Inicio"><a id="ajuste" href="perfil.php" class="fa fa-home"></a></li>
      <li title="Arquivos de Atividades"><a href="../conteudo1/atividades.php" class="archive">archive</a></li>
      <li title="Contato"><a href="../conteudo1/contato.php" class="contact">contact</a></li>
	        <li title="Sair" ><a id="ajuste" class="fa fa-sign-out" href="sair.php"></a></li>
			 <li title="configuração" ><a  onclick="document.getElementById('id01').style.display='block'" id="ajuste" class="fa fa-cog" > </a></button></li>
			
    </ul>
    
    <ul class="menu-bar">
        <li title="Menu"><a class="menu-button">Pesquisa</a></li>
        <li title="O que é?"><a href="../conteudo1/pg1.php">O que é?</a></li>
        <li title="Tratamento"><a href="../conteudo1/pg2.php">Tratamento</a></li>
        <li title="ONG's"><a href="../conteudo1/pg3.php">ONG's</a></li>
		<li title="Fake News"><a href="../conteudo1/pg5.php">Curiosidades</a></li>
		
    </ul>


</body>
</html>
<?php }?>