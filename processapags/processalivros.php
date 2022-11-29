
<?php
session_start();

	//conexao
	include ("../conexao.php");
	$sql="SELECT * FROM livros ;";
    $resultado = mysqli_query($con,$sql);
    $tabela = array();
    $i=0;
    while ($livros = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        $tabela[$i][0]=$livros['nomelivro'];
        $tabela[$i][1]=$livros['autor'];
        $tabela[$i][2]=$livros['genero'];
        $i++;
    }
    $_SESSION["l"]=$i;
    $_SESSION["tabela"]=$tabela;
    
	
    header("location: ../telainicio.php?s=l");

?>

