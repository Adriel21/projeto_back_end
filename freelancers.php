<?php

use Projeto\Categoria;
use Projeto\Profissao;
use Projeto\Usuario;


require_once 'inc/header.php';
$usuario = new Usuario;
$validaFreela = $usuario->listarTodosFreela();
$profissao = new Profissao;


if(!isset($_GET['id'])) {
    $listaDeFreelancers = $usuario->listarTodosFreela();
} else if (isset($_GET['id'])){
    $usuario->profissao->setCategoriaId($_GET['id']);
    $listaDeFreelancers = $usuario->listarPorCategoria();
} 



$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
?>


<div class="container-fluid overflow-hidden sticky-top">
    <div class=" row ">
        <div class="col-12 col-sm-3 col-xl-2 px-0 bg-light d-flex">
            <div class="menu-lateral d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-dark">
                <a href="/" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto  text-decoration-none">
                    <span class="ps-1 d-none d-sm-inline text-white">Bem-Vindo!</span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                   
                    <li>
                            <li data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <a href="projetos.php"><span class="ms-1 d-sm-inline text-light">Projetos</span></a>
                            <li class="nav-item dropdown pb-1 pb-lg-0">
                                <a class="nav-link dropdown-toggle nav-link px-sm-0 px-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fs-5 bi bi-filter-square"></i>
                                <span class="ms-1 d-sm-inline text-light">Categorias</span>
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="freelancers.php">Todas as categorias</a></li>
                                  <?php foreach($listaDeCategorias as $categorias) { ?>  
                                 <li><a class="dropdown-item text-black" href="freelancers.php?id=<?=$categorias['id']?>"><?=$categorias['nome']?></a></li>
                                 <?php } ?>
                             </ul> 
                            
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>
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
                        <form class="d-flex p-1" action="resultados_freelancers.php" method="GET">
                            <input class="form-control " type="search" placeholder="Digite o que procura" aria-label="Search" name="busca">
                            <div class="ps-2">
                            <button class="botao-feed ps-2 btn text-white" type="submit" >BUSCAR</button>
                            </div>
                        </form>
                </div>
            </nav> 
            <!-- Cabeçalho fim -->

            <!-- Início conteúdo das vagas -->

            <?php if(!isset($listaDeFreelancers[0] ['categoria'])) { ?>

                      <div class="col pt-4 card-vagas">
                      <div class="card w-77">
                          <div class="card-body coluna-vagas">
                          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                              <div class="d-flex w-100 justify-content-between">
                              <h3 class="mb-1 pb-4 text-center">No momento, não existem Freelancers dessa categoria</h3>
                              </div>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            
                              
                              </div>
                          </a>
                      </div>
            <?php } else { ?>
            <?php foreach($listaDeFreelancers as $freelancers) { ?>
            <?php if ($freelancers['profissao_id'] !== null) { ?>
            <div class="col pt-4 card-vagas">
                <div class="card w-77">
                    <div class="card-body coluna-vagas">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 gap-3">
                        <img class="perfil_freela_feed" src="fotos_de_perfil/<?=$freelancers['perfil']?>" alt="" width="100" height="100">
                        <div>
                            <h3 class="mb-2"><?=$freelancers['titulo']?></h3>
                            <h5 class="mb-3"><?=$freelancers['nome']?></h5>
                            <p class=""><strong>Resumo:</strong> <?=$freelancers['descricao']?></p>
                        </div>
                        </div>
                       
                       
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="botao-feed btn   me-md-2" type="button">Visualizar Perfil</button>
                        
                        </div>
                    </a>
                </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>
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
            </body>
            <script src="./js/bootstrap.bundle.js"></script>
            </html>
           
        