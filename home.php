<?php
require 'verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Meu Sistema</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LOJA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="home.php?pg=clientes">Cliente</a></li>
                <li><a class="dropdown-item" href="home.php?pg=produtos">Produtos</a></li>
              </ul>
            </li>
          </ul>
            <div class="form-inline" > <!--my-lg-0 -->
                <label class="p-2"><?php echo $nomeUser ?></label>
                <a href="logout.php" class="btn mr-2">SAIR</a>
            </div>
        </div>
      </div>
    </nav>

    <main>
      <div class="container-fluid">
        <h5 class="mt-3">Ol?? <?php echo $nomeUser ?>, Seja Bem Vindo </h5>
        
        <?php
        $pg = "";

        if(isset($_GET['pg']) && !empty($_GET['pg'])){
          $pg = addslashes($_GET['pg']);
        }
        
        switch($pg){
          case 'clientes':require 'pags/clientes.php'; break;
          case 'produtos':require 'pags/produtos.php'; break;
          default: require 'pags/dashboard.php'; break;
        }
        
        ?>
      </div>
    </main>  

    <!-- JavaScript Bundle with Popper -->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
  
<?php
else: header ("Location:login.html"); endif; ?>