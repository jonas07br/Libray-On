<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}
?>
<div class="container-fluid p-5">
        <div class="row  justify-content-center">
          <div class="col-sm-6 p-5 border border-warning rounded bg-light">
            <h1 class="display-3 text-center">Adicionar Usuário</h1>
            <hr>
            <form method="POST" action="" >
              <div class="row mb-3 justify-content-center text-center ">
                <label for="inputEmail3" name="nomelivro" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="row mb-3 justify-content-center text-center">
                <label for="inputPassword3" name="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
              </div>
              <div class="row mb-3 justify-content-center text-center">
                <label for="inputPassword3" name="email" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-6">
                  <input type="password" class="form-control" id="inputPassword3">
                </div>
              </div>
              <div class="row mb-3 justify-content-end">
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>