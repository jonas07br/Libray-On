<?php 

if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}

?>

<div class="row p-5 ">
  
  <?php
        $qtd_emprestimo = $_SESSION["t"];
        $emprestimo = $_SESSION["emprestimo"];
        for ($i=0; $i < $qtd_emprestimo; $i++) {    
          if ($_SESSION["usertype"]=="user"){
            echo "<div class='col-sm-3'>
                  <div class='card'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$emprestimo[$i][1]."</h5>
                      <p> Usuário; ".$emprestimo[$i][2]."
                      
                    </div>
                  </div>
                </div>";
        }
        if ($_SESSION["usertype"]=="admin"){
          echo "<div class='col-sm-3'>
                  <div class='card'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$emprestimo[$i][1]."</h5>
                      <p> Usuário; ".$emprestimo[$i][2]."
                      <a  href='paguser/devolver.php?cod=".$emprestimo[$i][0]."' class='btn btn-primary'>Realizar Devolução</a>
                    </div>
                  </div>
                </div>";
        }
          
        }
      ?>
  

</div>