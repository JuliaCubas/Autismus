<html>
<head>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="estilocontato.css">
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
<body>

    	
<div class="contatoposi">
<div class="contato" id="contato">
<h1>Contate-nos</h1><br>
<div class="txtb">
  <label>Nome :</label>
  <input type="text" name="" value="" placeholder="Seu Nome">
</div>
<div class="txtb">
  <label>Email :</label>
  <input type="text" name="" value="" placeholder="Seu Email">
</div>
<div class="txtb">
  <label>Numero de telefone :</label>
  <input type="text" name="" value="" placeholder="Seu Numero de Telefone">
</div>
<div class="txtb">
  <label>Mensagem :</label>
  <textarea></textarea>
</div>
<a class="btn btn-primary btn-lg">Enviar</a>
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

</body>
</html>