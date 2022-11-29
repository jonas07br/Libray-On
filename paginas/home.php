<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:index.php");
}
?>
<div class="container-fluid p-5">
        <div class="row">
          <div class="col-sm-3 " >
            <div class="card" style="width: 18rem;">
              <a href="telainicio.php?s=addl"><img src="imgs/livro.png"   class="card-img-top "></a>
              <div class="card-body">
                <h4 class="card-text text-center">Adicionar Livro</h4>
              </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width: 18rem;">
            <a href="processapags/processalivros.php" name="mostrar"><img src="imgs/livro.png"   class="card-img-top "></a>
            <div class="card-body">
              <h4 class="card-text text-center">Livros</h4>
            </div>
          </div>
      </div>
        <div class="col-sm-3">
          <div class="card" style="width: 18rem;">
            <a href="telainicio.php?s=emp"><img src="imgs/emprestimo.png"    class="card-img-top "></a> 
            <div class="card-body">
              <h4 class="card-text text-center">Empréstimos</h4>
            </div>
        </div> 
        </div>
        <div class="col-sm-3 ">
          <div class="card " style="width: 18rem; ">
            <a href="telainicio.php?s=addu"> <img src="imgs/usuario.png"    class="card-img-top "></a> 
            <div class="card-body">
              <h4 class="card-text text-center">Adicionar usuário</h4>
            </div>
      </div>
      </div>