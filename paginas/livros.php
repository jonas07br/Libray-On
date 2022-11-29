
<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}

?>

<div class="row p-5 justify-content-center">
  <div class="col-sm-6 bg-light border rounded">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Autor</th>
      <th scope="col">Gênero</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
        $qtd_livros = $_SESSION["l"];
        $tabelas = $_SESSION["tabela"];
        for ($i=0; $i < $qtd_livros; $i++) {
          echo "<tr>";
          echo "<td>".$tabelas[$i][0]."</td>";
          echo "<td>".$tabelas[$i][1]."</td>";
          echo "<td>".$tabelas[$i][2]."</td>";
          echo "</tr>";
        }
      ?>
    </tr>
    
</table>
  </div>

</div>