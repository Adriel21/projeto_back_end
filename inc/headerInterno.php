<?php 


use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Usuario;

      require_once '../vendor/autoload.php';
      $pagina = basename($_SERVER['PHP_SELF']);
      $sessao = new ControleDeAcesso;

      $sessao->verificaAcesso();
      
      if(isset($_GET['sair'])) {
        $sessao->logout();
      }

      $profissao = new Profissao;
      $dadosProfissao = $profissao->listar();
      if(isset($_SESSION['usuario_id'])){
        $profissao->setUsuarioId($_SESSION['usuario_id']);
        $listarFreela = $profissao->listarUm();
      }

      
     
    
?>

<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?php 
    switch($pagina){
      case 'dashboard_cliente.php':
     ?>
    <title>Dashboard Cliente</title>
    <?php 
    break;

     case 'dashboard_freelancer.php':
    ?>
    <title>Dashboard Freelancer</title>
    <?php 
    break;
    
    case 'cadastro_atualiza.php':
    ?>
    <title>Atualizar Cadastro</title>
    <?php 
    break;
    
    case 'projeto_insere.php':
    ?>
     <title>Cadastrar Projeto</title>
    <?php 
    break;
    
    case 'detalhes_do_projeto.php':
    ?>
    <title>Atualizar Projeto</title>
    <?php 
    break;
    
    case 'freelancer_insere.php':
    ?>
    <title>Cadastrar Perfil Freelancer</title>
    <?php 
    break;
    
    case 'freelancer_atualiza.php':
     ?>
    <title>Atualizar Perfil Freelancer</title>
     <?php 
    break;
    
    case 'redes_insere.php':
    ?>
    <title>Inserir Redes</title>
     <?php 
    break;
    
    case 'redes_atualiza.php':
    ?>
    <title>Atualizar Redes</title>
     <?php 
    break;
    }
    ?>















<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
 

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
        <li class="active nav-item mx-1">
          <a class="nav-link btn text-uppercase fw-semibold px-3" aria-current="page" href="../index.php">Home</a>
        </li>
        
       <?php if(isset($_SESSION['usuario_id'])) { ?>
          <li class="active nav-item mx-1">
          <a class="nav-link btn text-uppercase fw-semibold px-3" href="dashboard_freelancer.php">Visualizar Perfil Freelancer</a>
        </li> 
        <?php } else { ?>
        <li class="active nav-item mx-1">
          <a class="nav-link btn text-uppercase fw-semibold px-3" href="freelancer_insere.php">Cadastrar Perfil Freelancer</a>
        </li>
        <?php }  ?>
        <li class="active nav-item mx-1">
          <a class="nav-link btn text-uppercase fw-semibold px-3" href="dashboard_cliente.php">Perfil Cliente</a>
        </li>

        <li class="active nav-item mx-1 dropdown">
          <a class="nav-link btn text-uppercase fw-semibold px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Online
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../admin/cadastro_atualiza.php">Editar Cadastro</a></li>
            <li><a class="dropdown-item" href="dashboard_cliente.php?sair" name="sair" >Sair</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>

</header>



