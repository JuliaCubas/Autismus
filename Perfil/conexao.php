<?php
$host="localhost";
$username="root";
$password="";
$db_name="autismos";

$connect = mysqli_connect($host,$username,$password,$db_name);
if(!$connect){
    echo "Falha na conexao com o Banco de Dados!";
    exit ();
}
?>
