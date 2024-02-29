<?php 

if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}

?>

<div class="row p-5 ">
  
  <?php
        $qtd_livros = $_SESSION["l"];
        $tabelas = $_SESSION["tabela"];
        for ($i=0; $i < $qtd_livros; $i++) {         
          echo "<div class='col-sm-3'>
                  <div class='card'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$tabelas[$i][0]."</h5>
                      <hr>
                      <p>".$tabelas[$i][4]."</p>
                      <hr>
                      <p> Gênero:".$tabelas[$i][2]."</p>
                      <p class='card-text'> Autor: ".$tabelas[$i][1]."</p>";
          if ($_SESSION["usertype"]=="user"){
            echo "
                    </div>
                  </div>
                </div>"
          ;
          }
          if ($_SESSION["usertype"]=="admin"){
            echo "<a href='telainicio.php?s=emp' class='btn btn-primary'>Realizar Emprestimo</a>
            
            <a href='processapags/removerlivro.php?cod=".$tabelas[$i][3]."' class='btn btn-danger'>Remover Livro</a>
                    </div>
                  </div>
                </div>"
        ;
          }
          

        }
      ?>
</div>
