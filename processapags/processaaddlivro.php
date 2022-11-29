<?php
session_start();
if(isset($_POST['addlivro'])){
	//conexao
	include ("../conexao.php");
	
	//$email = isset($_POST["email"])?$_POST["email"]:"";
	//$nome = isset($_POST["nome"])?$_POST["nome"]:"";
    //$password = isset($_POST["senha"])?$_POST["senha"]:"";
	//verificar se o email esta sendo usado
	//$sql="SELECT * FROM usuario WHERE email = '$email'; ";
    //$resultado = mysqli_query($con,$sql);
    //$row=mysqli_num_rows($resultado);
    //if ($row==1){
        //header("location: telacadastro.php?s=e");
    //}
	//preparar um SQL para executar no banco
    $nomelivro=isset($_POST["nomelivro"])?$_POST["nomelivro"]:"";
    $autor=isset($_POST["autor"])?$_POST["autor"]:"";
    $genero=isset($_POST["genero"])?$_POST["genero"]:"";
    $cod=isset($_POST["codlivro"])?$_POST["codlivro"]:"";
	if ($stmt = mysqli_prepare($con, "insert into livros(nomelivro,autor,genero,codlivro) values(?,?,?,?)")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'sssi',$nomelivro,$autor,$genero,$cod);
	    //efetiva e executa a SQL no banco, i.e., insere
	    $status = mysqli_stmt_execute($stmt);
		if ($status === false) {
			trigger_error($stmt->error, E_USER_ERROR);
		  }
	    //fecha o statement
	    mysqli_stmt_close($stmt);
	}
	mysqli_close($con);
    header("location: ../telainicio.php?s=addl");
}