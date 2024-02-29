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
        $tabela[$i][3]=$livros['codlivro'];
        $tabela[$i][4]=$livros['descricao'];
        $i++;
    }
    $_SESSION["l"]=$i;
    $_SESSION["tabela"]=$tabela;
    
	if ($_SESSION["usertype"]=="user"){
        header("Location: ../paguser/telainiciouser.php?s=l");
    }
    if ($_SESSION["usertype"]=="admin"){
        header("location: ../telainicio.php?s=l");
      }
    

?>
