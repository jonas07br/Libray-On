<?php 
session_start();
if(isset($_POST['enviar'])){

    $email=isset($_POST['email'])? $_POST['email']:"";
    $senha=isset($_POST['senha'])? $_POST['senha']:"";
        if ($email=="adm@123" && $senha=="adm"){
            header("Location:telainicio.html");
        }
        else {
            header("Location:telalogin.html");
        }
        
    

}
else{
    
    header("Location:telalogin.html");
}



?>