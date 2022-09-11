<?php

use Projeto\Categoria;
use Projeto\Rede;
use Projeto\Usuario;
use Projeto\Utilitarios;

require_once 'inc/header.php';


$usuario = new Usuario;
$usuario->setId($_GET['id']);
$detalhesDoFreelancer = $usuario->listarFreela();

$redes = new Rede;
$redes->setUsuarioId($detalhesDoFreelancer['id']);
$rede = $redes->listarUm();
$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
?>


<div class="container-fluid overflow-hidden sticky-top">
    <div class=" row ">
        <div class="col-12 col-sm-3 col-xl-2 px-0 d-flex " style="background-color: #0421b5;">
            <div class="menu-lateral d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-dark">
                <a href="/" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto  text-decoration-none">
                    <span class="d-none ps-1 d-sm-inline text-white">Bem-Vindo!</span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                   
                    <li>
                         <li data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <a href="freelancers.php"><span class="ms-1 d-sm-inline text-light">Freelancers</span></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-link px-sm-0 px-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fs-5 bi bi-filter-square"></i>
                                <span class="ms-1 d-sm-inline text-light">Categorias</span>
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="projetos.php">Todas as categorias</a></li>
                                  <?php foreach($listaDeCategorias as $categorias) { ?>  
                                 <li><a class="dropdown-item text-black" href="projetos.php?id=<?=$categorias['id']?>"><?=$categorias['nome']?></a></li>
                                 <?php } ?>
                             </ul> 
                            
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Products</span></a>
                    </li> -->
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-people"></i><span class="ms-lg-1  d-sm-inline">Customers</span> </a>
                    </li>
                   
                </ul>
            </div>
        </div>

        <!-- Container das vagas inicio -->

        <div class="col d-flex flex-column h-sm-100">
            <!-- Cabeçalho inicio -->
            <nav class="navbar container-fluid ">
                <div class="cabecalho-interno d-flex col-12    justify-content-center">
                        <form class="d-flex p-1" action="resultados_projetos.php" method="GET">
                            <input class="form-control " type="search" placeholder="Digite o que procura" aria-label="Search" name="busca">
                            <div class="ps-2">
                            <button class="botao-busca ps-2 btn text-white" type="submit" >BUSCAR</button>
                            </div>
                        </form>
                </div>
            </nav> 
            <!-- Cabeçalho fim -->

            <!-- Início conteúdo das vagas -->


                
            <div class="col pt-4 card-vagas ms-3">
                <div class="card w-100">
                    <div class="card-body coluna-vagas">
                    <div class="d-flex w-100 gap-3">
                                
                                <img class="perfil_freela_feed" src="fotos_de_perfil/<?=$detalhesDoFreelancer['perfil']?>" alt="" width="100" height="100">
                                
                                <div>
                                    <h3 class="mb-2"><?=$detalhesDoFreelancer['titulo']?></h3>
                                    <h5 class="mb-3"><?=$detalhesDoFreelancer['nome']?></h5>
                                </div>
                            </div>
                       
                        <p class="mb-3 mt-3"><strong>Descrição:</strong> <?=$detalhesDoFreelancer['descricao']?></p>
                        <hr>
                <div class="mt-3">
                <ul class=" list-group-flush ps-0">
                  <li class="list-group-item ps-0">
                    <?php if(isset($rede)) { ?>
                    <h6 class="text-lg-start"><i class="bi bi-browser-chrome fs-4"></i> Website</h6>
                    <span class="text-secondary">
                        <?php if($rede['website'] == "") { ?>   
                         <p class="text-lg-start">https://www.exemplo.com.br</p>
                        <?php } else  { ?>
                        <p class="text-lg-start"><a href="<?=$rede['website']?>" class="text-lg-start" target="_blank"><?=Utilitarios::limitaCaractere($rede['website'])?></a></p>
                    </span>
                        <?php } ?>
                  </li>
                  <hr>
                  <li class="list-group-item ps-0">
                    <h6 class="text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkdin</h6>
                    <span class="text-secondary">
                    <?php if($rede['linkedin'] == "") { ?>   
                         <p class="text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>
                        <?php } else  { ?>
                        <p class="text-lg-start"><a href="<?=$rede['linkedin']?>" class="text-lg-start" target="_blank"><?=$rede['linkedin']?></a></p>
                    </span>
                        <?php } ?>
                  </li>
                  <hr>
                  <li class="list-group-item ps-0">
                    <h6 class="text-center text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>
                    <span class="text-secondary">
                      <?php if($rede['instagram'] == "") { ?>   
                         <p class="text-lg-start">https://www.instagram.com/exemplo/</p>
                        <?php } else  { ?>
                        <p class="text-lg-start"><a href="<?=$rede['instagram']?>" target="_blank"><?=$rede['instagram']?></a></p>
                            
                    </span>
                        <?php } ?>
                  </li>
                 
                  <?php } else { ?>
                <li class="list-group-item ps-0">
                    <h6 class="text-center text-lg-start"><i class="bi bi-browser-chrome fs-4 "></i> Website</h6>
                    <span class="text-secondary">
                        <p class="text-lg-start">https://www.exemplo.com.br</p>
                    </span>
                  </li>
                  <hr>
                  <li class="list-group-item ps-0">
                    <h6 class="text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkedin</h6>
                    <span class="text-secondary">
                        <p class="text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>
                    </span>
                  </li>
                  <hr>
                  <li class="list-group-item ps-0">
                    <h6 class="text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>
                    <span class="text-secondary">
                         <p class="text-lg-start">https://www.instagram.com/exemplo/</p></span>
                  </li>
                  <?php } ?>
                </div>
              
                
            <!-- Fim conteúdo das vagas -->

            <!-- modal início -->

             

       
            <!-- Fim da paginação das vagas -->
            </body>
            <script src="./js/bootstrap.bundle.js"></script>
            </html>
           
        