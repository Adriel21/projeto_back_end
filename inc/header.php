<?php

use Projeto\ControleDeAcesso;
use Projeto\Usuario;

require_once './vendor/autoload.php';
$pagina = basename($_SERVER['PHP_SELF']);
$sessao = new ControleDeAcesso;
if(isset($_GET['sair'])) {
  $sessao->logoutExterno();
}

if(isset($_SESSION['id'])){
  $usuario = new Usuario;
  $usuario->setId($_SESSION['id']);
  $dadosFreela = $usuario->listarFreela();
}



?>

<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Colajob</title>
<!-- <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/header.css">
</head>
<body>
    


<header id="topo" class="border-bottom sticky-top">
<?php if (!isset($_SESSION['id'])) { ?>
<section class="navbar navbar-expand-lg">
  <div class="container limitador">
    <h1 class="ms-n1"><a class="navbar-brand logo" href="index.php"><img src="img/tecnologia.png" width="40"> Colajob</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <nav class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item m-1">
          <a class="nav-link btn text-uppercase fw-semibold" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item m-1">
          <a class="nav-link btn text-uppercase fw-semibold" href="login.php">Login</a>
        </li>

        <li class="nav-item m-1">
          <a class="nav-link btn text-uppercase fw-semibold" href="cadastro.php">Cadastro</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
<?php } else { ?>
  <nav class="navbar navbar-expand-lg">
  <div class="container limitador">
    <h1 class="ms-n1"><a class="navbar-brand logo" href="index.php"><img src="img/tecnologia.png" width="40"> Colajob</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item m-1">
          <a class="nav-link btn btn-primary text-white px-3" aria-current="page" href="index.php">Home</a>
        </li>
        
       
        <?php if($dadosFreela['profissao_id'] !== null) { ?>
          <li class="nav-item m-1">
            <a class="nav-link btn btn-primary text-white px-3" href="admin/dashboard_freelancer.php">Visualizar Perfil Freelancer</a>
          </li>
       <?php } else { ?>
        <li class="nav-item m-1">
          <a class="nav-link btn btn-primary text-white px-3" href="admin/freelancer_insere.php">Cadastrar Perfil Freelancer</a>
        </li>
        <?php } ?>

        <li class="nav-item m-1">
          <a class="nav-link btn btn-primary text-white px-3" href="admin/dashboard_cliente.php">Perfil Cliente</a>
        </li>

        <li class="nav-item m-1 dropdown">
          <a class="nav-link btn btn-primary text-white px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Online
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="admin/cadastro_atualiza.php">Editar Cadastro</a></li>
            <li><a class="dropdown-item" href="index.php?sair" name="sair" >Sair</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>
<?php } ?>
</header>



