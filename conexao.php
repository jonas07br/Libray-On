<?php  //include("conexao.php");

$host = "localhost"; // ip do servidor do banco
$usuario = "root"; // usuario do banco
$senha = ""; // senha do banco
$dbname = "biblioteca"; // nome do banco de dados

//Conecta minha app ao SGBD
$con = mysqli_connect($host,$usuario,$senha,$dbname)
or die("Nao foi possivel conectar: ".mysqli_error());

//echo "Conexao bem sucedida";
$db = mysqli_select_db($con,$dbname)
or die("Nao pude selecionar o banco de dados");


?>