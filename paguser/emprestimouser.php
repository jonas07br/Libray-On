<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}
?>
<script>
  function alertaok()
{
  alert("Emprestimo realizado!");
}
</script>

<?php
if (isset($_GET["p"])){
  if ($_GET["p"]=="ok"){
    echo "<body onload='alertaok()'>
    </body>";
    }
}
?>

<div class="container-fluid p-3">
  <div class="row  justify-content-center">
    <div class="col-sm-7 p-5 border border-info rounded bg-light">
      <h1 class="display-3 text-center">Realizar Emprestimo</h1>
      <hr>
      <form method="POST" action="../processapags/processaemprestimos.php">
        <div class="row mb-3 justify-content-center text-center ">
          <label  class="col-sm-3 col-form-label">Nome do Livro</label>
          <div class="col-sm-6">
            <input type="text" name="nomelivro" class="form-control" required>
          </div>
        </div>
        <div class="row mb-3 justify-content-end">
          <div class="col-sm-4">
            <button type="submit" name="emprestimo" class="btn btn-primary">Realizar Empréstimo</button>
          </div>
          <div class="text-danger text-center">
          <?php
                    if (isset($_GET["p"])){
                      if($_GET["p"]=="emperro"){
                        echo "<p > Máximo de emprestimos atingido.</p>";
                      }
                    }
                ?> 
          </div>
        </div>
      </form>
    </div>
  </div>
</div>