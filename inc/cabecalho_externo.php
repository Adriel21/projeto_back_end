<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - back end</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/logo-icone/favicon.ico">

    <!-- Css includes -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Css proprio -->
    <link rel="stylesheet" href="css/estilo.css">

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    <!-- Header, aqui está sendo criado o header e todas as suas configurações visuais -->
<header class="justify-content-around cabecalho color-7">

    <!-- aqui está o menu dentro do header onde configuramos os elementos dentro do cabeçalho -->
    <nav class="navbar navbar-expand-md text-center ">
        <!-- Abaixo temos todas as configurações/classes que permitem o menu estar 100% responsivo -->
            <div class="container md-5">
                <h1 class="logo-menu"><img src="./img/logo-icone/tecnologia.png" alt="logo projeto colajob" width="50" height="46"> <strong>Colajob</strong> </h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse row justify-content-md-end justify-content-sm-end justify-content-center"
                    id="navbarSupportedContent">
                    <div class=" cl-effect-21">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a class="" aria-current="page" href="index.php"
                                    alt="Página inicial">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="login.php" alt="Entrar na conta">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="cadastro.php" alt="Cadastrar conta">Cadastro</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>