<?php

use Projeto\Categoria;
use Projeto\Projeto;
use Projeto\Usuario;

require_once 'inc/header.php';
$projeto = new Projeto;



if(!isset($_GET['id'])) {
    $listaDeProjetos = $projeto->listarTodos();
} else if (isset($_GET['id'])){
    $projeto->setCategoriaId($_GET['id']);
    $listaDeProjetos = $projeto->listarPorCategoria();
} 



$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
?>


<div class="container-fluid overflow-hidden sticky-top">
    <div class=" row ">
        <div class="col-12 col-sm-3 col-xl-2 px-0 bg-light d-flex">
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
                            <button class="botao-feed ps-2 btn text-white" type="submit" >BUSCAR</button>
                            </div>
                        </form>
                </div>
            </nav> 
            <!-- Cabeçalho fim -->

            <!-- Início conteúdo das vagas -->

            <?php if(!isset($listaDeProjetos[0] ['categoria'])) { ?>

                      <div class="col pt-4 card-vagas">
                      <div class="card w-77">
                          <div class="card-body coluna-vagas">
                          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                              <div class="d-flex w-100 justify-content-between">
                              <h3 class="mb-1 pb-4 text-center">No momento, não existem projetos desta categoria</h3>
                              </div>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            
                              
                              </div>
                          </a>
                      </div>
            <?php } else { ?>
            <?php foreach($listaDeProjetos as $projetos) { ?>
                
            <div class="col pt-4 card-vagas">
                <div class="card w-77">
                    <div class="card-body coluna-vagas">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1 pb-4"><?=$projetos['titulo']?></h3>
                        <small>3 days ago</small>
                        </div>
                        <p class="mb-1"><?=$projetos['resumo'] ?? 'alo'?></p>
                        <small>Autor do Projeto: <?=$projetos['nome'] ?? 'alo'?></small>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mt-lg-0">
                        <button class="botao-feed btn   me-md-2" type="button"><a href="projeto.php?id=<?=$projetos['id']?>">VISUALIZAR PROJETO</a></button>
                        
                        </div>
                    </a>
                </div>
                <?php } ?>
                <?php } ?>
            <!-- Fim conteúdo das vagas -->

            <!-- modal início -->

             
  <div class="modal fade campoModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Termos de uso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <ul>
        <li>Não será permitido a utilização do site para fins de vendas de produtos, mesmo de livros. Caso a prática seja identificada,
          a conta será imeditamanete banida.
        </li>
        <hr>
        <li>A LivroSolto preza pela honestidade e respeito, portanto, caso alguma troca ou doação sejam acordados e esse não seja devidamente cumprido,
          nos vemos no direito de suspender a conta pelo prazo de 3 dias úteis.
        </li>
        <hr>
        <li>A LivroSolto condena qualquer prática criminosa de preconceito, racisco, homofobia e assédio. Caso algum desses comportamentos sejam identificados, a LivroSolto
          se encontrará no direito de banir a conta permanentemente e repassar o ocorrido para autoridades.
        </li>
        <hr>
        <li>Não será tolerado contas com identidade fraudulentas. A consequência para tal caso, será o banimento imediato.</li>
        <hr>
        <li>Para todos usuários solicitamos o respeito, a honestidade e compromisso.</li>
      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim modal -->

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
           
        