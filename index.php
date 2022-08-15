<?php

use Projeto\ControleDeAcesso;
require_once './vendor/autoload.php';
$sessao = new ControleDeAcesso;

if(isset($_GET['sair'])) {
    $sessao->logout();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>
    
</body>
</html>
<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
  <div class="container">
    <h1><a class="navbar-brand" href="index.php"><i class="bi bi-unlock"></i> Admin | Microblog</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="meu-perfil.php">Meu perfil</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuários</a>
            </li>
        

            <li class="nav-item">
                <a class="nav-link" href="noticias.php">Notícias</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../index.php" target="_blank">Área pública</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="?sair"> <i class="bi bi-x-circle"></i> Sair</a>
            </li>
        </ul>

    </div>
  </div>
</nav>

</header>

<article class="p-5 my-4 rounded-3 bg-white shadow">
    <div class="container-fluid py-1">        
        <h2 class="display-4">Olá <?=$_SESSION['nome']?>!</h2>

        <?php if( isset($_GET['perfil-atualizado']) ){ ?>
            <p class="alert alert-primary">
                Dados atualizados com sucesso!
            </p>
        <?php } ?>

        <p class="fs-5">Você está no <b>painel de controle e administração</b> do
		site Microblog e seu <b>nível de acesso</b> é <span class="badge bg-dark"> <?=$_SESSION['nome']?> </span>.</p>
        <hr class="my-4">

        <div class="d-grid gap-2 d-md-block text-center">
            <a class="btn btn-dark bg-gradient btn-lg" href="meu-perfil.php">
                <i class="bi bi-person"></i> <br>
                Meu perfil
            </a>

            <a class="btn btn-dark bg-gradient btn-lg" href="noticias.php">
                <i class="bi bi-newspaper"></i> <br>
                Notícias
            </a>
        </div>
    </div>
</article>