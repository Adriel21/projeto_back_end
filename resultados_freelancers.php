<?php

use Projeto\Categoria;
use Projeto\Usuario;
use Projeto\Utilitarios;

require_once 'inc/header.php';
$usuario = new Usuario;


if(!isset($_GET['busca'])) {
    header('location:feed.php');
}
$profissao->setTermo($_GET['busca']);
$resultados = $profissao->busca();



$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
?>


<div class="container-fluid overflow-hidden sticky-top">
    <div class=" row ">
        <div class="col-12 col-sm-3 col-xl-2 px-0 d-flex" style="background-color: #0421b5;">
            <div class="menu-lateral d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-dark">
                 <span class="d-none ps-1 d-sm-inline text-white pb-sm-3 mb-md-0 me-md-auto  ">Bem-Vindo!</span>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                   
                    <li>
                            <li data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <a href="projetos.php" class="fs-6 bi bi-cash-coin"><span class="ms-1 d-sm-inline text-light">Projetos</span></a>
                            </li>
                            <li class="nav-item dropdown pb-1 pb-lg-0">
                                <a class="nav-link dropdown-toggle nav-link px-sm-0 px-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class=" bi bi-filter-square"></i>
                                <span class="ms-1 d-sm-inline text-light">Categorias</span>
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="freelancers.php">Todas as categorias</a></li>
                                  <?php foreach($listaDeCategorias as $categorias) { ?>  
                                 <li><a class="dropdown-item text-black" href="freelancers.php?id=<?=$categorias['id']?>"><?=$categorias['nome']?></a></li>
                                 <?php } ?>
                             </ul> 
                            
                    </li>

                    <!-- <li class="mt-5 d-none d-lg-block">
                        <p><img src="img/img-pessoas-sinalizando.png" alt="" width="200"></p>
                    </li> -->

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
                            <button class="botao-busca ps-2 btn text-white" type="submit" >BUSCAR</button>
                            </div>
                        </form>
                </div>
            </nav> 
            <!-- Cabeçalho fim -->

            <!-- Início conteúdo das vagas -->

            <?php if(empty($resultados)) { ?>

                     
                      <div class="col pt-4 card-vagas ms-md-3">
                      <div class="card w-77">
                          <div class="card-body coluna-vagas">
                          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                              <div class="d-flex w-100 justify-content-between">
                              <h3 class="mb-1 pb-4 text-center text-lg-start word">Nenhum resultado encontrado para essa busca</h3>
                              </div>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            
                              
                              </div>
                          </a>
                      </div>
            <?php } else { ?>
            <?php foreach($resultados as $resultado) { ?>
                
            <div class="col pt-4 card-vagas ms-lg-3 ms-1">
                <div class="card w-77">
                    <div class="card-body coluna-vagas">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            
                            <div class="d-flex w-100 gap-3">
                                <img class="perfil_freela_feed" src="fotos_de_perfil/<?=$resultado['perfil']?>" alt="">
                                <div>
                                    <h3 class="mb-2 word"><?=$resultado['titulo']?></h3>
                                    <h5 class="mb-3 word"><?=$resultado['nome']?></h5>
                                    <p class="d-none d-lg-inline word"><strong>Resumo:</strong> <?=Utilitarios::limitaResumo($resultado['descricao'])?></p>
                                </div>
                            </div>
                            <div class="mt-4 mb-2">
                                <p class="d-inline d-lg-none word mt-3"><strong>Resumo:</strong> <?=Utilitarios::limitaResumo($resultado['descricao'])?></p>
                            </div>

                            
                             <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="freelancer.php?id=<?=$resultado['id']?>>"><button class="botao-feed btn me-md-2" type="button">VISUALIZAR FREELANCER</button></a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
           
        