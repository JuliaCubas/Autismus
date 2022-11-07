<html>
<head>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="estiloaviso.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" ></script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">

<body>
<div class="aviso">
<div class="jumbotron">
  <h1 class="display-4">Olá!</h1>
  <p class="lead">  </p>
  <hr class="my-4">
  <p>Para acessar nossas atividades você precisará logar em nosso site!</p><br>
  <a class="btn btn-primary btn-lg" href="../perfil/login.php" role="button"> Entrar </a>
</div>
</div>
<ul class="menu">

      <li title="Menu"><a  class=" home menu-button">Menu</a></li>
	 
	 <li title="Inicio"><a id="ajuste" href="../autismos.php" class="fa fa-home"></a></li>
      <li title="Arquivos de Atividades"><a href="aviso.php" class="archive">archive</a></li>
      <li title="Contato"><a href="contato.php" class="contact">contact</a></li>
	</ul>
    
    <ul class="menu-bar">
        <li title="Menu"><a class="menu-button">Pesquisa</a></li>
        <li title="O que é?"><a href="pg1.php">O que é?</a></li>
        <li title="Tratamento"><a href="pg2.php">Tratamento</a></li>
        <li title="ONG's"><a href="pg3.php">ONG's</a></li>
		<li title="Fake News"><a href="pg5.php">Curiosidades</a></li>
		
    </ul>
	
<script language="javascript" type="text/javascript">
$(document).ready(function(){
$(".menu-button").click(function(){
$(".menu-bar").toggleClass( "open" );
});
});
</script>
</div>
</body>
</html>