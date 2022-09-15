<?php 
ob_start();
$pagina = basename($_SERVER['PHP_SELF']); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?php 
    switch($pagina){
      case 'login.php':
     ?>
    <title>Login - Colajob</title>
    <?php 
    break;

    case 'cadastro.php':
    ?>
    <title>Cadastro - Colajob</title>
    <?php 
    break;
    
    case 'recuperaSenha.php':
    ?>
    <title>Recuperar senha</title>
    <?php 
    break;
    }
    ?>

    <!-- Css includes -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Css proprio -->
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="css/header.css">

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    

</head>
<body>
    

<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container limitador">
  <h1 class="ms-n1"><a class="navbar-brand logo" href="index.php"><img src="./img/tecnologia.png" width="40"> Colajob</a></h1>

  </div>
</nav>

</header>