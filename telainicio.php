<?php
session_start();
if ( $_SESSION["controle"]!="ok"){
    header("Location:index.php");
}
?>
<html>
    <head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
</html>
    </head>
    <body background="imgs/fundo.png">
      <?php
        include("paginas/nav.php");
        if (isset($_GET["s"])){
          if ($_GET["s"] == "h"){
            include("paginas/home.php");
          }
          elseif ($_GET["s"] == "addu"){
            include("paginas/adicionarusuario.php");
          }
          elseif ($_GET["s"] == "addl"){
            include("paginas/adicionarlivro.php");
          }
          elseif ($_GET["s"] == "emp"){
            include("paginas/emprestimos.php");
          }
          elseif ($_GET["s"] == "l"){
            include("paginas/livros.php");
          }
      }
      else{
        include("paginas/home.php");
      }
       ?>
      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">     
    </body>
</html>