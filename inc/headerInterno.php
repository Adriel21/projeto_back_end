<?php 
      // Vendor

use Projeto\ControleDeAcesso;

      require_once '../vendor/autoload.php';
      $sessao = new ControleDeAcesso;

      if(isset($_GET['sair'])) {
        $sessao->logout();
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
 

<link rel="stylesheet" href="../css/header.css"> 
<link rel="stylesheet" href="../css/dashboard_freelancer.css">
<link rel="stylesheet" href="../css/estilo_forms.css">



</head>
<body>
    
<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg">
  <div class="container limitador">
    <h1 class="ms-n1"><a class="navbar-brand logo" href="../index.php"><img src="../img/tecnologia.png" width="40"> Colajob</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        </li>
        
       
        <li class="nav-item">
          <a class="nav-link" href="loginDois.php">Cadastrar Perfil Freelancer</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Online
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="noticias-por-categoria.php">Editar Cadastro</a></li>
            <li><a class="dropdown-item" href="dashboard_cliente.php?sair" name="sair" >Sair</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>

</header>



