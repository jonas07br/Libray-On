<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <script>
      
    </script>
    </html>
    <body background="imgs/fundo.png">
        <div class="container fluid">
            <div class="row justify-content-center ">
                <div class="col-sm-6 p-5 border rounded border-warning position-absolute top-50 start-50 translate-middle bg-light border-3"  >
                    <form method="POST" action="processalogin.php" class="needs-validation">
                        <h1 class="display-3 text-center">Login</h1>
                        <hr>
                        <div class="row mb-3 justify-content-center text-center">
                          <label  class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-6">
                            <input type="text" name="email" class="form-control"  required>
                          </div>
                        </div>
                        <div class="row mb-3 justify-content-center text-center">
                          <label  class="col-sm-2 col-form-label">Senha</label>
                          <div class="col-sm-6">
                            <input type="password" name="senha" class="form-control"  required>
                          </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                          <div class="col-sm-2">
                            <button type="submit" name="enviar" class="btn btn-primary">OK</button>
                          </div>
                          
                        </div>
                        <div class=" justify-content-center text-center">
                          <div class="text-danger">
                          <?php
                            if (isset($_GET["s"])){
                              if($_GET["s"]=="e"){
                                echo "<p > Usuario ou senha incorretos</p>";
                              }
                            }
                          ?>
                          </div>
                        
                            <a href="telacadastro.php">Não possuo conta</a>
                        </div>
                      </form>

                </div>
            </div>
        </div>




































        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </body>
</html>