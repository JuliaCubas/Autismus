<html>
<head>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" ></script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
<body>



<div class="content"> 
<img src="imagens/Logo4.png"/> 
</div>
<div class="box">
<span></span>
<span></span>
<span></span>
</div>















<ul class="menu">
      <li title="Menu"><a class=" menu-button home">Menu</a></li>
	  		  <li title="Inicio"><a id="ajuste" href="autismos.php" class="fa fa-home"></a></li>
      
      <li title="Perfil"><a href="perfil/login.php" class="active about">about</a></li>
      <li title="Arquivos de Atividades"><a href="conteudo/aviso.php" class="archive">archive</a></li>
      <li title="Contato"><a href="conteudo/contato.php" class="contact">contact</a></li>
    </ul>
    
    <ul class="menu-bar">
        <li title="Menu"><a href="#" class="menu-button">Pesquisa</a></li>
        <li title="O que é?"><a href="conteudo/pg1.php">O que é?</a></li>
        <li title="Tratamento"><a href="conteudo/pg2.php">Tratamento</a></li>
        <li title="ONG's"><a href="conteudo/pg3.php">ONG's</a></li>
		<li title="Fake News"><a href="conteudo/pg5.php">Curiosidades</a></li>
		
    </ul>
	
<script language="javascript" type="text/javascript">
$(document).ready(function(){
$(".menu-button").click(function(){
$(".menu-bar").toggleClass( "open" );
});
});
</script>

</body>
</html>