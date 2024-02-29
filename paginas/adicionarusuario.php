<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}
if ($_SESSION["usertype"]=="user"){
  header("Location: paguser/telainiciouser.php?s=h");
}
?>
<div class="container-fluid p-5">
        <div class="row ">
          <div class="col-sm-4 p-5 border border-info rounded bg-light">
            <h1 class="display-6 text-center">Adicionar Usuário</h1>
            <hr>
            <form method="POST" action="processapags/processaaddusuario.php" >
              <div class="row mb-3 justify-content-center text-center ">
                <?php
                    if (isset($_GET["p"])){
                      if($_GET["p"]=="adderro"){
                        echo "<p > Este email já está sendo utilizado.</p>";
                      }
                    }
                ?> 
                <label for="inputEmail3"  class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nome"  id="inputEmail3" required>
                </div>
              </div>
              <div class="row mb-3 justify-content-center text-center">
                <label for="inputPassword3"  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" name="email" class="form-control" id="inputPassword3" required>
                </div>
              </div>
              <div class="row mb-3 justify-content-center text-center">
                <label for="inputPassword3"  class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-6">
                  <input type="password" name="senha" class="form-control" id="inputPassword3" required>
                </div>
              </div>
              
              <fieldset class="row mb-3 justify-content-center ">
          <legend class="col-form-label col-sm-2 pt-0 text-center">Tipo</legend>
          <div class="col-sm-6">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="usertype" id="gridRadios1" value="user" required>
              <label class="form-check-label tex" for="gridRadios1">
                Usuário comum
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="usertype" id="gridRadios2" value="admin" required>
              <label class="form-check-label" for="gridRadios2">
                Administrador
              </label>
            </div>
            
        </fieldset>
        <div class="row mb-3 justify-content-end">
                <div class="col-sm-4">
                  <button type="submit" name="cadastrar" class="btn btn-primary">Adicionar</button>
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-sm-4 p-5 border border-info rounded bg-light">
            <h1 class="display-6 text-center">Remover Usuário</h1>
            <hr>
            <form method="POST" action="processapags/processaaddusuario.php" >
              <div class="row mb-3 justify-content-center text-center ">
                <?php
                    if (isset($_GET["p"])){
                      if($_GET["p"]=="deleteerro"){
                        echo "<p > Este email já está sendo utilizado.</p>";
                      }
                    }
                ?> 

              </div>
              <div class="row mb-3 justify-content-center text-center">
                <label for="inputPassword3"  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" name="email" class="form-control" id="inputPassword3" required>
                </div>
              </div>
              
              <div class="row mb-3 justify-content-center">
                <div class="col-sm-4">
                  <button type="submit" name="delete" class="btn btn-primary">Remover</button>
                </div>
              </div>
              
            </form>
          </div>
          <div class="col-sm-4 p-5 border border-info rounded bg-light">
            <h1 class="display-6 text-center">Alterar Usuário</h1>
            <hr>
            <form method="POST" action="processapags/processaaddusuario.php" >
            <div class="row mb-3 justify-content-center text-center ">
                <?php
                    if (isset($_GET["p"])){
                      if($_GET["p"]=="updateerro"){
                        echo "<p > Este email já está sendo utilizado.</p>";
                      }
                    }
                ?> 
                <label for="inputEmail3"  class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nome"  id="inputEmail3" required>
                </div>
              </div>
              <div class="row mb-3 justify-content-center text-center">
                <label for="inputPassword3"  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" name="email" class="form-control" id="inputPassword3" required>
                </div>
              </div>
              
              <div class="row mb-3 justify-content-center">
                <div class="col-sm-4">
                  <button type="submit" name="update" class="btn btn-primary">Alterar nome</button>
                </div>
              </div>
              
            </form>
          </div>
      
      </div>
