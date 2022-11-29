<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}
?>
<div class="container-fluid">
  <div class="row justify-content-center p-5">
    <div class="col-sm-12 p-5 border border-warning rounded bg-light">
      <h1 class="display-3">Empréstimos</h1>
      <hr>
      <div class="col-sm-12 mb-3">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">"Nome do Livro"</h5>
          </div>
          <div class="card-body">
            <p class="card-text">Data Do Emprestimo;</p>
            <p class="card-text">Prazo Máximo de Devolução:</p>
            <a href="#" class="btn btn-primary">Devolução</a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mb-3">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">"Nome do Livro"</h5>
          </div>
          <div class="card-body">
            <p class="card-text">Data Do Emprestimo;</p>
            <p class="card-text">Prazo Máximo de Devolução:</p>
            <a href="#" class="btn btn-primary">Devolução</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>