<?php

require_once '../inc/headerInterno.php';

use Projeto\ControleDeAcesso;
use Projeto\Projeto;
use Projeto\Rede;
use Projeto\Usuario;
use Projeto\Utilitarios;

$sessao = new ControleDeAcesso;
$projeto = new Projeto;
$rede = new Rede;
$listaDeRedes = $rede->listarRedes();
$rede->setUsuarioId($_SESSION['id']);


foreach ($listaDeRedes as $teste){
    if(($teste['usuario_id'] === $_SESSION['id'])){
        $redes = $rede->listarUm();
    } 
}






$projeto->usuario->setId($_SESSION['id']);
$listaDeProjetos = $projeto->listarDetalhes();
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();


?>


<!-- Menu Lado direito -->


<main class="container">
    <section class="main-body">

          <div class="row">
            <div class="col-md-4 col-sm-12 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center flex-lg-row text-lg-start justify-content-start gap-lg-2">
                    <img src="../fotos_de_perfil/<?=$_SESSION['perfil']?>" alt="Admin" class="rounded-circle" width="100">
                    <div class="mt-2 mt-lg-3">
                      <h4><?=Utilitarios::limitaNome($_SESSION['nome'])?></h4>
                      <button button class="rounded-3 botao_perfil py-1 px-5 my-1 border-none fs-6" type="button">
                                <a href="./projeto_insere.php">Publicar Projeto</a>
                            </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mt-3 shadow">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item ">
                    <?php if(isset($redes)) { ?>
                    <h6 class="text-center text-lg-start"><i class="bi bi-browser-chrome fs-4"></i> Website</h6>
                    <span class="text-secondary">
                        <?php if($redes['website'] == "") { ?>   
                         <p class="text-center text-lg-start">https://www.exemplo.com.br</p>
                        <?php } else  { ?>
                        <p class="text-center text-lg-start"><a href="<?=$redes['website']?>" class="text-center text-lg-start"><?=Utilitarios::limitaCaractere($redes['website'])?></a></p>
                    </span>
                        <?php } ?>
                  </li>
                  <li class="list-group-item">
                    <h6 class="text-center text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkdin</h6>
                    <span class="text-secondary">
                    <?php if($redes['linkedin'] == "") { ?>   
                         <p class="text-center text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>
                        <?php } else  { ?>
                        <p class="text-center text-lg-start"><a href="<?=$redes['linkedin']?>" class="text-center text-lg-start"><?=$redes['linkedin']?></a></p>
                    </span>
                        <?php } ?>
                  </li>
                  <li class="list-group-item">
                    <h6 class="text-center text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>
                    <span class="text-secondary">
                      <?php if($redes['instagram'] == "") { ?>   
                         <p class="text-center text-lg-start">https://www.instagram.com/exemplo/</p>
                        <?php } else  { ?>
                        <p class="text-center text-lg-start"><a href="<?=$redes['instagram']?>"><?=$redes['instagram']?></a></p>
                            
                    </span>
                        <?php } ?>
                  </li>
                  <?php } else { ?>
                    <h6 class="text-center text-lg-start"><i class="bi bi-browser-chrome fs-4 "></i> Website</h6>
                    <span class="text-secondary">
                        <p class="text-center text-lg-start">https://www.exemplo.com.br</p>
                    </span>
                  </li>
                  <li class="list-group-item">
                    <h6 class="text-center text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkedin</h6>
                    <span class="text-secondary">
                        <p class="text-center text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>
                    </span>
                  </li>
                  <li class="list-group-item">
                    <h6 class="text-center text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>
                    <span class="text-secondary">
                         <p class="text-center text-lg-start">https://www.instagram.com/exemplo/</p></span>
                  </li>
                  <?php } ?>
                  <li class="list-group-item text-center text-lg-end">
                  <?php if(isset($redes)) { ?>
                    <span class="text-secondary"><a href="redes_atualiza.php">Editar redes</a></span>
                    <?php } else { ?>
                    <span class="text-secondary"><a href="redes_insere.php">Inserir redes</a></span>
                    <?php } ?>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-9 mx-auto col-lg-7">
              <div class="card mb-3 shadow">
                <div class="card-body">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h2 class="text-center text-lg-start">Meus Projetos</h2>
                    

        <?php if(empty($listaDeProjetos)) { ?>
            <div class="col-12 px-md-1 mt-2">
                  <div class="list-group">
                   
                      <div class="list-group-item list-group-item-action">
                        <h4 class="text-center text-lg-start">Não há projetos cadastrados no momento</h4>
                      </div>
                  </div>
              </div>
        <?php } ?>
        <?php foreach ($listaDeProjetos as $projetos) { ?>
            
        <div class="col-12 px-md-1 mt-2">
                  <div class="list-group">
                   
                      <div class="list-group-item list-group-item-action">
                        <h4 class="text-center text-lg-start">Título: <?=$projetos['titulo']?></h4>
                          <p class="text-center text-lg-start mt-3 mt-lg-0"><strong>Data:</strong> <?=Utilitarios::formataData($projetos['data'])?></p>
                          <p class="text-center text-lg-start"><strong>Resumo do projeto: </strong> <?= $projetos['resumo']?></p>
                          <div class="text-lg-end text-center"><button class=" px-5 py-1 mt-2 botao_projetos rounded-3" type="button"><a href="./detalhes_do_projeto.php?id=<?=$projetos['id']?>">Visualizar projeto</a></button></div>
                      </div>
                  </div>
              </div>
            <?php } ?>
                        <!-- <div class="contact-info-section margin-40px-tb">
                            <ul class="list-style9 no-margin">

                                <li> -->

                                    <!-- <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-mobile-alt text-purple"></i>
                                            <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>(+44) 123 456 789</p>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-envelope text-pink"></i>
                                            <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p><a href="javascript:void(0)">addyour@emailhere</a></p>
                                        </div> -->
                                    <!-- </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
              </div>
          </div>

    </section>
</main>
        

<script src="../js/bootstrap.bundle.min.js"></script>

                    