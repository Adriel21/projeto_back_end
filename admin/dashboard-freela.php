<?php

use Projeto\ControleDeAcesso;
use Projeto\Projeto;
use Projeto\Usuario;


require_once '../vendor/autoload.php';
require_once '../inc/cabecalho-cadastro.php';

$sessao = new ControleDeAcesso;
$projeto = new Projeto;
$listaDeProjetos = $projeto->listarTodos();
$usuario = new Usuario;
$usuario->setId($_GET['id']);
$dadosFreela = $usuario->listarFreela();
?>


<!-- Menu Lado direito -->
<div class="container-fluid overflow-hidden ">
    <div class=" row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-light d-flex sticky-top">
            <div class="menu-lateral d-flex flex-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white bg-primary">
                <a href="/" class="col-12 justify-content-center d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-decoration-none">
                        <img src="../img/logo-icone/logo_colajob-vetor-32.png" class="bg-white" alt="Logo da colajob">
                            <span class="ps-1 d-none d-sm-inline text-white">
                                colajob
                            </span>
                </a>

                <div class="col-12 d-flex flex-column align-items-center">
                    <img src="../fotos_de_perfil/<?=$_SESSION['perfil']?>" class="rounded-circle mb-3 img-perfil shadow" alt="Avatar">

                    <h5 class="mb-2"><strong><?=$_SESSION['nome']?></strong></h5>
                    <p class="text-white"><?=$dadosFreela['titulo']?> <span class="badge bg-black">PRO</span></p>
                    <button class="col-8 btn btn-dark text-uppercase">atualizar Perfil</button>
                </div>

                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                         <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-link px-sm-0 px-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fs-5 bi bi-filter-square"></i>
                                <span class="ms-1 d-none d-sm-inline">Categorias</span>
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                 <li><a class="dropdown-item" href="noticias-por-categoria.php?id="></a></li>
                             </ul> 
                            
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Bootstrap</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Products</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Container das vagas inicio -->
        <div class="col d-flex flex-column h-sm-100">
            <!-- Cabeçalho inicio -->
            <nav class="navbar container-fluid ">
                <div class="cabecalho-interno d-flex col-12    justify-content-center">
                        <form class="d-flex p-1 ">
                            <input class="form-control " type="search" placeholder="Digite o que procura" aria-label="Search">
                            <div class="ps-2">
                            <button class="botao-feed ps-2 btn text-white" type="submit">BUSCAR</button>
                            </div>
                        </form>
                </div>
            </nav> 
            <!-- Cabeçalho fim -->
            
            <!-- Call  -->
            <div class="bg-primary rounded my-2 py-2 ms-2">
                <div class="container">
                    <!-- row -->
                    <div class="row align-items-center g-0">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- heading -->
                            <div>
                                <h1 class="text-white display-4 fw-bold pe-lg-8">Join the Geeks team shape the future of design
                                </h1>
                                <!-- text -->
                                <p class="text-white-50 mb-4 lead">
                                    If you’re passionate and ready to dive in, we’d love to meet you. We’re committed to supporting our
                                    employee professional development and well-being.
                                </p>
                                <!-- btn -->
                                <a href="#" class="btn btn-dark">View opportunities</a>
                            </div>
                        </div>
                        <!-- img -->
                        <div class=" col-xl-6 col-lg-6 col-md-12 text-lg-end text-center pt-6">
                            <img src="../assets/images/hero/hero-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Início conteúdo das vagas -->
            <main class="row overflow-auto border border-2 border-opacity-50 pb-2 rounded box-vagas">
            <?php foreach($listaDeProjetos as $projetos) { ?>
            <div class="col pt-4 card-vagas">
                <div class="card w-77">
                    <div class="card-body coluna-vagas">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1 pb-4"><?=$projetos['titulo']?></h3>
                        <small>3 days ago</small>
                        </div>
                        <p class="mb-1"><?=$projetos['resumo']?></p>
                        <small>(Nome do cliente talvez.)</small>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="botao-feed btn   me-md-2" type="button">DETALHES</button>
                        
                        </div>
                    </a>
                </div>
                </div>
                <?php } ?>
            
            </main>
            <!-- Fim conteúdo das vagas -->

            <!-- Páginação das vagas -->
            <nav aria-label="Page navigation example">
                <ul class="pt-2 pagination justify-content-end align-items-end paginacao">
                    <li class="page-item disabled"><a class="page-link">Anterior</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Próxima</a>
                    </li>
                </ul>
            </nav>
            <!-- Fim da paginação das vagas -->

        

                    

                

     
            
        


                        



            

               