<?php
if (isset($_GET["cod"])){
    $code = $_GET["cod"];
	//inclui o arquivo que abre a conexao
	include ("../conexao.php");
	//preparar um SQL para executar no banco
	if ($stmt = mysqli_prepare($con, "delete from livros where codlivro=?")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'i',$code);
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
    header("location: processalivros.php");
}
?>