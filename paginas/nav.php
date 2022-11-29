<?php 
if ( $_SESSION["controle"]!="ok"){
    header("Location:../index.php");
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-4" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="telainicio.php?s=h"><h3>Início</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><h3>Sobre</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="close.php"><h3>Sair</h3></a>
              </li>
            </ul>
            <div class="d-flex  mb-lg-0" >
              <p class="navbar-brand ps-1" href="#"><h2>Library-On</h2></p>
            </div>
          </div>
        </div>
      </nav>