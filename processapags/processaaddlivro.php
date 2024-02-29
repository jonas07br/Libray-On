<?php
session_start();
if(isset($_POST['addlivro'])){
	//conexao
	include ("../conexao.php");
	$nomelivro=isset($_POST["nomelivro"])?$_POST["nomelivro"]:"";
    	$autor=isset($_POST["autor"])?$_POST["autor"]:"";
    	$genero=isset($_POST["genero"])?$_POST["genero"]:"";
    	$cod=isset($_POST["codlivro"])?$_POST["codlivro"]:"";
	$desc=isset($_POST["descricao"])?$_POST["descricao"]:"";
	//verificar se o livro existe
	$sql="SELECT * FROM livros WHERE nomelivro = '$nomelivro'; ";
    	$resultado = mysqli_query($con,$sql);
    	$row=mysqli_num_rows($resultado);
    	if ($row==1){
        	header("location: ../telainicio.php?s=addl&p=adderro");
    	}
	
    
	if ($stmt = mysqli_prepare($con, "insert into livros(nomelivro,autor,genero,codlivro,descricao) values(?,?,?,?,?)")) {
		//vincular valores as interrogacoes (?)
		mysqli_stmt_bind_param($stmt,'sssis',$nomelivro,$autor,$genero,$cod,$desc);
	   	 //efetiva e executa a SQL no banco, i.e., insere
	    	$status = mysqli_stmt_execute($stmt);
		if ($status === false) {
			trigger_error($stmt->error, E_USER_ERROR);
		}
	   	 //fecha o statement
	   	 mysqli_stmt_close($stmt);
	}
	mysqli_close($con);
    	header("location: ../telainicio.php?s=addl&p=addok");
}
