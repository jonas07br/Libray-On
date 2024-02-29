<?php
session_start();

	//conexao
	include ("../conexao.php");
	$sql="SELECT * FROM emprestimos ;";
    $resultado = mysqli_query($con,$sql);
    $emprestimo = array();
    $i=0;
    while ($tabela = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        $emprestimo[$i][0]=$tabela['empcod'];
        $emprestimo[$i][1]=$tabela['nomelivro'];
        $emprestimo[$i][2]=$tabela['emailuser'];
        $i++;
    }
    $_SESSION["t"]=$i;
    $_SESSION["emprestimo"]=$emprestimo;

	if ($_SESSION["usertype"]=="user"){
        header("Location: ../paguser/telainiciouser.php?s=d");
    }
    if ($_SESSION["usertype"]=="admin"){
        header("location: ../telainicio.php?s=d");
      }
    

?>