<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}
if ($_SESSION["usertype"]=="user"){
  header("Location: paguser/telainiciouser.php?s=h");
}

?>
<div class="container-fluid p-3">
  <div class="row  justify-content-center">
    <div class="col-sm-5 p-5 border border-info rounded bg-light">
      <h1 class="display-3 text-center">Adicionar Livro</h1>
      <hr>
      <form method="POST" action="processapags/processaaddlivro.php">
        <div class="row mb-3 justify-content-center text-center ">
          <label  class="col-sm-2 col-form-label">Nome</label>
          <div class="col-sm-6">
            <input type="text" name="nomelivro" class="form-control" >
          </div>
        </div>
        <div class="row mb-3 justify-content-center text-center">
          <label   class="col-sm-2 col-form-label">Autor</label>
          <div class="col-sm-6">
            <input type="text" name="autor" class="form-control" >
          </div>
        </div>
        <div class="row mb-3 justify-content-center text-center">
          <label   class="col-sm-2 col-form-label">Código</label>
          <div class="col-sm-6">
            <input type="text" name="codlivro" class="form-control" >
          </div>
        </div>
        <fieldset class="row mb-3 justify-content-center ">
          <legend class="col-form-label col-sm-2 pt-0 text-center">Gênero</legend>
          <div class="col-sm-6">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" id="gridRadios1" value="Comedia">
              <label class="form-check-label tex" for="gridRadios1">
                Comédia
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="Romance">
              <label class="form-check-label" for="gridRadios2">
                Romance
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" id="gridRadios3" value="Drama">
              <label class="form-check-label" for="gridRadios3">
                Drama
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="ficcao">
              <label class="form-check-label" for="gridRadios2">
                Ficção Científica
              </label>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea class="form-control" placeholder="Descrição" name="descricao" rows="3"></textarea>
            </div>
          </div>
        </fieldset>
        <div class="text-center">
        <?php
        if (isset($_GET["p"])){
          if($_GET["p"]=="addok"){
            echo "<p1 class='text-success'>Livro adicionado!</p1>";
          }
          if($_GET["p"]=="adderro"){
            echo "<p1 class='text-danger'>Livro já cadastrado</p1>";
          }

        }
        ?>
        </div>
        <div class="row mb-3 justify-content-end">
          <div class="col-sm-4">
            <button type="submit" name="addlivro" class="btn btn-primary">Enviar</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>
