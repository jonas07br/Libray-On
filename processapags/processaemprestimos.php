<?php
session_start();
if(isset($_POST['emprestimo'])){
	//conexao
	include ("../conexao.php");

	//para usuario
	if ($_SESSION["usertype"]=="user"){
		$email = $_SESSION["useremail"];
		$nomelivro = isset($_POST["nomelivro"])?$_POST["nomelivro"]:"";
    	$empcod = rand(1000,10000);
		//verificaçao se ja existe mais de 3 emprestimos
		$sql="SELECT * FROM emprestimos WHERE emailuser = '$email'; ";
    	$resultado = mysqli_query($con,$sql);
    	$row=mysqli_num_rows($resultado);
    	if ($row<=3){
			//realização de emprestimo
			if ($stmt = mysqli_prepare($con, "insert into emprestimos(nomelivro,emailuser,empcod) values(?,?,?)")) {
				mysqli_stmt_bind_param($stmt,'ssi',$nomelivro,$email,$empcod);
				$status = mysqli_stmt_execute($stmt);
				if ($status === false) {
					trigger_error($stmt->error, E_USER_ERROR);
				}
				mysqli_stmt_close($stmt);
			}
			mysqli_close($con);
			header("Location: ../paguser/telainiciouser.php?s=emp&p=ok");
    	}
		elseif ($row==4) {
			header("Location: ../paguser/telainiciouser.php?s=emp&p=emperro");
		}
		
		

	}
	//para admin
	if ($_SESSION["usertype"]=="admin"){
		$email = isset($_POST["email"])?$_POST["email"]:"";
		$nomelivro = isset($_POST["nomelivro"])?$_POST["nomelivro"]:"";
    	$empcod = rand(1000,10000);


		$sql="SELECT * FROM livros WHERE nomelivro = '$nomelivro'; ";
    	$resultado = mysqli_query($con,$sql);
    	$livro=mysqli_num_rows($resultado);
		//verifica se o livro existe
		if ($livro==1){

			$sql="SELECT * FROM usuario WHERE email = '$email'; ";
    		$resultado = mysqli_query($con,$sql);
    		$usuario=mysqli_num_rows($resultado);
			if ($usuario==1){
		 		//verificaçao se ja existe mais de 3 emprestimos
		 		$sql="SELECT * FROM emprestimos WHERE emailuser = '$email'; ";
    	 		$resultado = mysqli_query($con,$sql);
    	 		$row=mysqli_num_rows($resultado);
    	 		if ($row<=3){
    	 	    	//realização de emprestimo
		 			if ($stmt = mysqli_prepare($con, "insert into emprestimos(nomelivro,emailuser,empcod) values(?,?,?)")) {
		 				mysqli_stmt_bind_param($stmt,'ssi',$nomelivro,$email,$empcod);
		 				$status = mysqli_stmt_execute($stmt);
		 				if ($status === false) {
		 					trigger_error($stmt->error, E_USER_ERROR);
		 				}
		 				mysqli_stmt_close($stmt);
		 			}
		 			mysqli_close($con);
		 			header("location: ../telainicio.php?s=emp&p=ok");
    	 		}
		 		elseif ($row==4) {
		 			header("location: ../telainicio.php?s=emp&p=emperro");
		 		}
			}
			elseif($usuario==0){
				header("location: ../telainicio.php?s=emp&p=usererro");
			}
			
		}
		if($livro==0){
			header("location: ../telainicio.php?s=emp&p=livroerro");
		}
		
	}
		

		

}
?>