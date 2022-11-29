<?php 
session_start();
if(isset($_POST['enviar'])){
    
    $emaillog=isset($_POST['email'])? $_POST['email']:"";
    $senhalog=isset($_POST['senha'])? $_POST['senha']:"";
    include ("conexao.php");
    $sql="SELECT * FROM usuario WHERE email = '$emaillog' AND senha = '$senhalog' ; ";
    $resultado = mysqli_query($con,$sql);
    $row=mysqli_num_rows($resultado);
    if ($row==1){
        $_SESSION["controle"]="ok";
        header("Location:telainicio.php");

    }
    else{
        header("Location:index.php?s=e");
    }
}
else{
    
    header("Location:index.php");
}



?>