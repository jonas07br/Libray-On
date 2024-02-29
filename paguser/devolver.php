<?php
if (isset($_GET["cod"])){
    $empcode = $_GET["cod"];
	//inclui o arquivo que abre a conexao
	include ("../conexao.php");
	//preparar um SQL para executar no banco
	if ($stmt = mysqli_prepare($con, "delete from emprestimos where empcod=?")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'i',$empcode);
	    //efetiva e executa a SQL no banco, i.e., insere
	    $status = mysqli_stmt_execute($stmt);
		///verifica se deu algo de errado:
		if ($status === false) {
			trigger_error($stmt->error, E_USER_ERROR);
		  }
	    //fecha o statement
	    mysqli_stmt_close($stmt);
	}
	mysqli_close($con);
    header("location: ../processapags/processadevolucao.php");
}
?>