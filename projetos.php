<?php
ob_start();
use Projeto\Categoria;
use Projeto\Projeto;
use Projeto\Utilitarios;
require_once 'inc/header.php';
$projeto = new Projeto;



if(!isset($_GET['id'])) {
    $listaDeProjetos = $projeto->listarTodos();
} else if (isset($_GET['id'])){
    $projeto->setCategoriaId($_GET['id']);
    $listaDeProjetos = $projeto->listarPorCategoria();
} 


$quantia = $projeto->nav();

if(isset($_GET['pg'])) { 
    $capture = filter_input(INPUT_GET, 'pg', FILTER_SANITIZE_URL);
} else {
    $capture = '';
}


$pg = ($capture == '' ? 1 : $capture);






$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
?>


<div class="container-fluid overflow-hidden">
    <div class="row">
        <div class="col-12 col-sm-3 col-xl-2 px-0 d-flex me-2 me-lg-0" style="background-color: #0421b5;">
            <div class="menu-lateral d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-dark">
                    <span class="d-none ps-1 d-sm-inline text-white pb-sm-3 mb-md-0 me-md-auto  ">Bem-Vindo!</span>
            
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                   
                    <li>
                         <li data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <a href="freelancers.php" class="fs-6 bi-people"><span class="ms-1 d-sm-inline text-light">Freelancers</span></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-link px-sm-0 px-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-filter-square"></i>
                                <span class="ms-1 d-sm-inline text-light fs-6 ">Categorias</span>
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-black" href="projetos.php">Todas as categorias</a></li>
                                  <?php foreach($listaDeCategorias as $categorias) { ?>  
                                 <li><a class="dropdown-item text-black" href="projetos.php?id=<?=$categorias['id']?>"><?=$categorias['nome']?></a></li>
                                 <?php } ?>
                             </ul> 
                           
                    </li>
                    <!-- <li class="mt-5 d-none d-lg-block">
                        <p><img src="img/img-pessoas-fazendo-cadastro.png" alt="" width="200"></p>
                    </li> -->
                    
                </ul>
                
            </div>
        </div>

        <!-- Container das vagas inicio -->

        <div class="col d-flex flex-column h-sm-100">
            <!-- Cabeçalho inicio -->
            <nav class="navbar container-fluid ">
                <div class="cabecalho-interno d-flex col-12 justify-content-center">
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

       <?php if(!isset($listaDeProjetos[0] ['categoria'])) { ?>

                      <div class="col pt-4 card-vagas ms-md-3">
                      <div class="card w-77">
                          <div class="card-body coluna-vagas">
                          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                              <div class="d-flex w-100 justify-content-between">
                              <h3 class="mb-1 pb-4 text-center text-lg-start word">No momento, não existem Projetos dessa categoria</h3>
                              </div>
                              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            
                              
                              </div>
                          </a>
                      </div>
            <?php } else { ?>
        <?php foreach($listaDeProjetos as $projetos) { ?>
                
            <div class="col pt-4 card-vagas ms-sm-3 ms-1">
                <div class="card w-100">
                    <div class="card-body coluna-vagas">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1 pb-4 word"><?=$projetos['titulo']?></h3>
                                <small><?=Utilitarios::formataData($projetos['data'])?></small>
                            </div>

                            <p class="mb-1 word"><?=Utilitarios::limitaResumo($projetos['resumo'])?></p>
                            <small>Autor do Projeto: <?=$projetos['nome'] ?? 'alo'?></small>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mt-lg-0">
                            <a href="projeto.php?id=<?=$projetos['id']?>"><button class="botao-feed  btn me-md-2 px-5" type="button">VISUALIZAR PROJETO</button></a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                <?php } ?>
                <?php } ?>
            <!-- Fim conteúdo das vagas -->

            <!-- Verifica a navegação da página anterior -->
            <?php
                if ($pg == 1) {
                    $anterior = 1;
                } else {
                    $anterior = $pg - 1;
                }

                // Verifica a navegação da página próxima
                if($pg == $quantia) {
                    $proxima = $quantia;
                } else {
                    $proxima = $pg + 1;
                }
            ?>

            <?php if(isset($listaDeProjetos[0] ['categoria'])) { ?>
            <!-- Páginação das vagas -->
            <nav aria-label="Page navigation example">
            
                <ul class="pt-2 pagination justify-content-end align-items-end paginacao">
                    <?php if($anterior) { ?>
                    <li class="page-item disabled"><a class="page-link" href="projetos.php?pg=<?=$anterior?>">Anterior</a></li>
                    <?php } else { ?>
                    <li class="page-item"><a class="page-link" href="projetos.php?pg=<?=$anterior?>">Anterior</a></li>
                    <?php } ?>
                    <!-- Indices limitando na apresentação de 4 indices anteriores ao ativo -->
                    <?php for($i = $pg - 4; $i <= $pg - 1; $i++) { 
                        if($i >= 1) {?>
                    <li class="page-item"><a class="page-link" href="projetos.php?pg=<?=$i?>"><?=$i?></a></li>
                    <?php } }  ?>

                    <?php for($j = $pg + 1; $j <= $pg + 4; $j++) { 
                        if($j <= $quantia) { ?>
                    <li class="page-item"><a class="page-link" href="projetos.php?pg=<?=$j?>"><?=$j?></a></li>
                    <?php } }  
                        if($proxima == $quantia) {
                    ?>

                    <li class="page-item">
                    <a class="page-link disabled" href="projetos.php?pg=<?=$proxima?>">Próxima</a>
                    </li>
                  
                    <?php } else {  ?>
                    <li class="page-item">
                    <a class="page-link" href="projetos.php?pg=<?=$proxima?>">Próxima</a>
                    </li>

                    <?php } } ?>
                </ul>
            </nav>
        
            <!-- Fim da paginação das vagas -->
            </body>
            <script src="./js/bootstrap.bundle.js"></script>
            </html>
           
        