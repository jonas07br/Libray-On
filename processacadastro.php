<?php
session_start();
if(isset($_POST['cadastrar'])){
	//conexao
	include ("conexao.php");
	
	$email = isset($_POST["email"])?$_POST["email"]:"";
	$nome = isset($_POST["nome"])?$_POST["nome"]:"";
    $password = isset($_POST["senha"])?$_POST["senha"]:"";
	//verificar se o email esta sendo usado
	$sql="SELECT * FROM usuario WHERE email = '$email'; ";
    $resultado = mysqli_query($con,$sql);
    $row=mysqli_num_rows($resultado);
    if ($row==1){
        header("location: telacadastro.php?s=e");
    }
	//preparar um SQL para executar no banco
	if ($stmt = mysqli_prepare($con, "insert into usuario(nome,email,senha) values(?,?,?)")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'sss',$nome,$email,$password);
	    //efetiva e executa a SQL no banco, i.e., insere
	    $status = mysqli_stmt_execute($stmt);
		if ($status === false) {
			trigger_error($stmt->error, E_USER_ERROR);
		  }
	    //fecha o statement
	    mysqli_stmt_close($stmt);
	}
	mysqli_close($con);
}else if(isset($_POST['update'])){
	$email = isset($_POST["email"])?$_POST["email"]:"";
	$nome = isset($_POST["nome"])?$_POST["nome"]:"";
	//inclui o arquivo que abre a conexao
	include ("conexao.php");
	//preparar um SQL para executar no banco
	if ($stmt = mysqli_prepare($con, "update usuario SET nome=? where email=?")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'ss',$nome,$email);
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
}else if(isset($_POST['delete'])){
	$email = isset($_POST["email"])?$_POST["email"]:"";
	//inclui o arquivo que abre a conexao
	include ("conexao.php");
	//preparar um SQL para executar no banco
	if ($stmt = mysqli_prepare($con, "delete from usuario where email=?")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'s',$email);
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
}
	header("location: index.php");
?>